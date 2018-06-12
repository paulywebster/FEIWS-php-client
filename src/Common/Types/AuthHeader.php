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
     * @var \FEIWebServicesClient\Common\Types\ArrayOfString
     */
    private $Exceptions;

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->UserName;
    }

    /**
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->Language;
    }

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfString
     */
    public function getExceptions() : \FEIWebServicesClient\Common\Types\ArrayOfString
    {
        return $this->Exceptions;
    }


}

