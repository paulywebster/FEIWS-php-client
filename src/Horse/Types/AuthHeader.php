<?php

namespace FEIWebServicesClient\Horse\Types;

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
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfString
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
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfString
     */
    public function getExceptions(): \FEIWebServicesClient\Horse\Types\ArrayOfString
    {
        return $this->Exceptions;
    }
}
