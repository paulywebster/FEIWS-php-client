<?php

namespace FEIWebServicesClient\Common\Types;

class DocIssuingBody
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }
}
