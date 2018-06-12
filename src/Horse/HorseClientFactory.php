<?php

namespace FEIWebServicesClient\Horse;

use FEIWebServicesClient\Horse\HorseClient;
use FEIWebServicesClient\Horse\ClassMap\HorseWSClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class HorseClientFactory
{

    public static function factory(string $wsdl) : \FEIWebServicesClient\Horse\HorseClient
    {
        $clientFactory = new PhproClientFactory(HorseClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(HorseWSClassmap::getCollection());

        return $clientBuilder->build();
    }


}

