<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseOwner
{
    /**
     * @var int
     */
    private $FEIID = null;

    /**
     * @var string
     */
    private $Name = null;

    /**
     * @var \DateTime
     */
    private $DateFrom = null;

    /**
     * @var string
     */
    private $Address1 = null;

    /**
     * @var string
     */
    private $Address2 = null;

    /**
     * @var string
     */
    private $Address3 = null;

    /**
     * @var string
     */
    private $Zip = null;

    /**
     * @var string
     */
    private $City = null;

    /**
     * @var string
     */
    private $CountryCode = null;

    /**
     * @var string
     */
    private $NationalityCode = null;

    /**
     * @var string
     */
    private $NationalityCodes = null;

    /**
     * @return int
     */
    public function getFEIID(): int
    {
        return $this->FEIID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom(): \DateTime
    {
        return $this->DateFrom;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->Address1;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->Address2;
    }

    /**
     * @return string
     */
    public function getAddress3(): string
    {
        return $this->Address3;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->Zip;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    /**
     * @return string
     */
    public function getNationalityCode(): string
    {
        return $this->NationalityCode;
    }

    /**
     * @return string
     */
    public function getNationalityCodes(): string
    {
        return $this->NationalityCodes;
    }
}
