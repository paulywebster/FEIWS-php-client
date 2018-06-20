<?php

namespace FEIWebServicesClient\Common\Types;

class AuthHeader
{
    /**
     * @var string
     */
    private $UserName;

    /**
     * @var string
     */
    private $Language;

    /**
     * @var ArrayOfString
     */
    private $Exceptions;

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->UserName;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->Language;
    }

    /**
     * @return ArrayOfString
     */
    public function getExceptions(): ArrayOfString
    {
        return $this->Exceptions;
    }
}
