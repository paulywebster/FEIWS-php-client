<?php

namespace FEIWebServicesClient\Authentication;

use FEIWebServicesClient\Authentication\Types\Login;
use FEIWebServicesClient\Authentication\Types\LoginResponse;
use FEIWebServicesClient\Authentication\Types\Mode;
use FEIWebServicesClient\Authentication\Types\ModeResponse;

class AuthenticationClient extends \Phpro\SoapClient\Client
{
    public function getCookies(): ? array
    {
        return $this->soapClient->_cookies ?? null;
    }

    public function login(string $username, string $password): LoginResponse
    {
        return $this->call('Login', new Login($username, $password));
    }

    public function mode(): ModeResponse
    {
        return $this->call('Mode', new Mode());
    }
}
