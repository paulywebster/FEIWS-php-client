<?php

namespace FEIWebServicesClient\Authentication;

use FEIWebServicesClient\Authentication\ClassMap\AuthenticationWSClassmap;
use FEIWebServicesClient\Environment;
use FEIWebServicesClient\FEIWsdl;
use FEIWebServicesClient\Service;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\ClientBuilder;

class AuthenticationClientFactory
{
    public static function factory($environment) : AuthenticationClient
    {
        $wsdl = FEIWsdl::factory(Environment::fromString($environment), Service::authentication());

        $clientFactory = new ClientFactory(AuthenticationClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(AuthenticationWSClassmap::getCollection());

        return $clientBuilder->build();
    }
}

