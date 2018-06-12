<?php

namespace FEIWebServicesClient\Authentication\ClassMap;

use FEIWebServicesClient\Authentication\Types as Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class AuthenticationWSClassmap
{

    public static function getCollection() : ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('Login', Type\Login::class),
            new ClassMap('LoginResponse', Type\LoginResponse::class),
            new ClassMap('LoginResult', Type\LoginResult::class),
            new ClassMap('Mode', Type\Mode::class),
            new ClassMap('ModeResponse', Type\ModeResponse::class),
        ]);
    }


}

