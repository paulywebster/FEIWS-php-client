<?php

namespace FEIWebServicesClient\Common;

use FEIWebServicesClient\Authentication\AuthenticationClientFactory;
use FEIWebServicesClient\Authentication\Types\Login;
use FEIWebServicesClient\Common\ClassMap\CommonWSClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class CommonClientFactory
{

    public static function factory(string $username, string $password) : \FEIWebServicesClient\Common\CommonClient
    {
        $factory = AuthenticationClientFactory::factory('https://vdata.fei.org/_vti_bin/Authentication.asmx?WSDL');
        $response = $factory->login(new Login($username, $password));
        if($response->getLoginResult()->getErrorCode() !== 'NoError')
        {
            throw new \Exception('Login failed !');
        }
        $cookies = $factory->getCookies();

        $clientFactory = new PhproClientFactory(CommonClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, 'https://vdata.fei.org/_vti_bin/FEI/CommonWS.asmx?WSDL', []);
        $clientBuilder->withClassMaps(CommonWSClassmap::getCollection());

        $client = $clientBuilder->build();
        $header = new \SoapHeader(
            'http://fei.org/',
            'AuthHeader',
            ['UserName' => $username, 'Language' => 'EN']
        );
        $client->applySoapHeaders($header);
        $client->setCookie('.CASXAUTH', $cookies['.CASXAUTH'][0]);

        return $client;
    }


}

