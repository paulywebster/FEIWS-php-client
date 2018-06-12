<?php

namespace FEIWebServicesClient\Authentication\Types;

use Phpro\SoapClient\Type\ResultInterface;

class LoginResponse implements ResultInterface
{
    /**
     * @var LoginResult
     */
    private $LoginResult;

    /**
     * @return LoginResult
     */
    public function getLoginResult() : LoginResult
    {
        return $this->LoginResult;
    }


}

