<?php


use FEIWebServicesClient\Horse\HorseClientFactory;

require __DIR__.'/../vendor/autoload.php';

$factory = HorseClientFactory::factory('tester');
//$response = $factory->addHorse([
//    'BirthName' => 'jumppperrt',
//    'CurrentName' => 'jumper',
//    'IsPony' => false,
//    'NatPassport' => '123456',
//    'IsActive' => true,
//    'GenderCode' => 'F',
//    'ColorCode' => 'black',
//    'IssuingNFCode' => 'BEL',
//    'DateBirth' => '01-01-2018',
//    'CastratedId' => 2,
//    'OwnerDateFrom' => '08-01-2018',
//    'Microchip' => '123456789456123',
//    'IssuingBodyCode' => 'AUS-EFA',
//    'RecognitionCode' => '123456',
//    'Ownership' => [
//        'NationalityOfOwnership' => 'BEL',
//        'DateFrom' => '01-01-2018',
//        'Members' => [
//            [
//                'FEIID' => 10147266,
//                'FamilyName' => 'Dubois',
//                'FirstName' => 'Paul',
//                'Address' => [
//                    'CountryCode' => 'Belgium',
//                    'Address1' => 'rue verte',
//                    'Zip' => '7100',
//                    'City' => 'la louvère',
//                    'IsMailingAddress' => false,
//                ],
//                'OwnershipPercentage' => 89.5,
//            ],
//            [
//                'FEIID' => 20000001,
//                'CorporationName' => 'Coca-cola',
//                'CorporationContactFEIID' => 10000000,
//                'CorporationContactFamilyName' => 'Dubois',
//                'CorporationContactFirstName' => 'Paul',
//                'Address' => [
//                    'CountryCode' => 'Belgium',
//                    'Address1' => 'rue rouge',
//                    'Zip' => '7100',
//                    'City' => 'la louvère',
//                    'IsMailingAddress' => false,
//                ],
//                'OwnershipPercentage' => 10.5,
//            ]
//        ],
//    ],
//]);
//
//var_dump($response->result());

$response = $factory->confirmAddHorse('11');
var_dump($response->result());
//$factory = HorseClientFactory::factory('tester');
//$response = $factory->getStudBookList();
//
//var_dump($response->result());

