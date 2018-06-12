<?php

use FEIWebServicesClient\Environment;
use FEIWebServicesClient\FEIWsdl;
use FEIWebServicesClient\Service;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;

$config = require __DIR__.'parameters.php';

$wsdl = FEIWsdl::factory(Environment::fromString($config['environment']), Service::common());

return Config::create()
    ->setWsdl($wsdl)
    ->setTypeDestination('src/Common/Types')
    ->setTypeNamespace('FEIWebServicesClient\\Common\\Types')
    ->setClientDestination('src/Common')
    ->setClientNamespace('FEIWebServicesClient\\Common')
    ->setClientName('CommonClient')
    ->setClassMapName('CommonWSClassmap')
    ->setClassMapNamespace('FEIWebServicesClient\\Common\\ClassMap')
    ->setClassMapDestination('src/Common/ClassMap')
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