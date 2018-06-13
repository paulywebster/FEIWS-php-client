<?php

namespace FEIWebServicesClient\Common;

use FEIWebServicesClient\Authentication\AuthenticationClientFactory;
use FEIWebServicesClient\Common\ClassMap\CommonWSClassmap;
use FEIWebServicesClient\Environment;
use FEIWebServicesClient\Service;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class CommonClientFactory
{

    public static function factory(string $user) : \FEIWebServicesClient\Common\CommonClient
    {
        $config = require __DIR__.'/../../config/parameters.php';

        $factory = AuthenticationClientFactory::factory($config['environment']);
        $response = $factory->login($config['username'], $config['password']);
        if($response->getLoginResult()->getErrorCode() !== 'NoError')
        {
            throw new \Exception('Login failed !');
        }
        $cookies = $factory->getCookies();

        $environment = Environment::fromString($config['environment']);
        $service = Service::common();
        $clientFactory = new PhproClientFactory(CommonClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $environment->url().$service->uri(), []);
        $clientBuilder->withClassMaps(CommonWSClassmap::getCollection());

        $client = $clientBuilder->build();
        $header = new \SoapHeader(
            'http://fei.org/',
            'AuthHeader',
            ['UserName' => $user, 'Language' => 'EN']
        );
        $client->applySoapHeaders($header);
        $client->setCookie('.CASXAUTH', $cookies['.CASXAUTH'][0]);

        return $client;
    }


}

