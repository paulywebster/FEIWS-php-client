<?php

namespace FEIWebServicesClient\Authentication;

use FEIWebServicesClient\Authentication\ClassMap\AuthenticationWSClassmap;
use FEIWebServicesClient\Environment;
use FEIWebServicesClient\Service;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\ClientBuilder;

class AuthenticationClientFactory
{
    public static function factory($environment) : AuthenticationClient
    {
        $environment = Environment::fromString($environment);
        $service = Service::authentication();

        $clientFactory = new ClientFactory(AuthenticationClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $environment->url().$service->uri(), []);
        $clientBuilder->withClassMaps(AuthenticationWSClassmap::getCollection());

        return $clientBuilder->build();
    }
}

