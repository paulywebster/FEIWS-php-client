<?php

use FEIWebServicesClient\Environment;
use FEIWebServicesClient\FEIWsdl;
use FEIWebServicesClient\Service;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;

$config = require __DIR__.'parameters.php';

$wsdl = FEIWsdl::factory(Environment::fromString($config['environment']), Service::authentication());

return Config::create()
    ->setWsdl($wsdl)
    ->setTypeDestination('src/Authentication/Types')
    ->setTypeNamespace('FEIWebServicesClient\\Authentication\\Types')
    ->setClientDestination('src/Authentication')
    ->setClientNamespace('FEIWebServicesClient\\Authentication')
    ->setClientName('AuthenticationClient')
    ->setClassMapName('AuthenticationWSClassmap')
    ->setClassMapNamespace('FEIWebServicesClient\\Authentication\\ClassMap')
    ->setClassMapDestination('src/Authentication/ClassMap')
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