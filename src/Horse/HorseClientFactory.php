<?php

namespace FEIWebServicesClient\Horse;

use FEIWebServicesClient\Authentication\AuthenticationClientFactory;
use FEIWebServicesClient\Environment;
use FEIWebServicesClient\Horse\ClassMap\HorseWSClassmap;
use FEIWebServicesClient\Service;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class HorseClientFactory
{
    public static function factory(string $user): HorseClient
    {
        $config = require __DIR__.'/../../config/parameters.php';

        $factory = AuthenticationClientFactory::factory($config['environment']);
        $response = $factory->login($config['username'], $config['password']);
        if ('NoError' !== $response->getLoginResult()->getErrorCode()) {
            throw new \Exception('Login failed !');
        }
        $cookies = $factory->getCookies();

        if (null === $cookies) {
            throw new \Exception('No cookie !');
        }
        $environment = Environment::fromString($config['environment']);
        $service = Service::horse();
        $clientFactory = new PhproClientFactory(HorseClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $environment->url().$service->uri(), []);
        $clientBuilder->withClassMaps(HorseWSClassmap::getCollection());

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
