<?php

use FEIWebServicesClient\Environment;
use FEIWebServicesClient\Service;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;

$config = require __DIR__.'/parameters.php';

$wsdl = Environment::fromString($config['environment'])->url().Service::horse()->uri();

return Config::create()
    ->setWsdl($wsdl)
    ->setTypeDestination('src/Horse/Types')
    ->setTypeNamespace('FEIWebServicesClient\\Horse\\Types')
    ->setClientDestination('src/Horse')
    ->setClientNamespace('FEIWebServicesClient\\Horse')
    ->setClientName('HorseClient')
    ->setClassMapName('HorseWSClassmap')
    ->setClassMapNamespace('FEIWebServicesClient\\Horse\\ClassMap')
    ->setClassMapDestination('src/Horse/ClassMap')
    ->addSoapOption('features', SOAP_SINGLE_ELEMENT_ARRAYS)
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(
        (new Assembler\GetterAssemblerOptions())
            ->withReturnType()
            ->withBoolGetters()
    )))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\RequestAssembler()),
        '/Request$/'
    ))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\ResultAssembler()),
        '/Response$/'
    ))
    ;
