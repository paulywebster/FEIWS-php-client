<?php

namespace FEIWebServicesClient\Authentication\Types;

class LoginResult
{
    /**
     * @var string
     */
    private $CookieName;

    /**
     * @var string
     */
    private $ErrorCode;

    /**
     * @return string
     */
    public function getCookieName(): string
    {
        return $this->CookieName;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->ErrorCode;
    }
}
