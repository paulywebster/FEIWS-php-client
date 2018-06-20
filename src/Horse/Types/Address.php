<?php

namespace FEIWebServicesClient\Horse\Types;

class Address
{
    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @var string
     */
    private $AddressNameCode;

    /**
     * @var string
     */
    private $Zip;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $Address1;

    /**
     * @var string
     */
    private $Address2;

    /**
     * @var string
     */
    private $Address3;

    /**
     * @var string
     */
    private $PhoneNr;

    /**
     * @var string
     */
    private $FaxNr;

    /**
     * @var bool
     */
    private $IsMailingAddress;

    /**
     * @var string
     */
    private $Comment;

    /**
     * @var string
     */
    private $TCN;

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
    public function getAddressNameCode(): string
    {
        return $this->AddressNameCode;
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
    public function getPhoneNr(): string
    {
        return $this->PhoneNr;
    }

    /**
     * @return string
     */
    public function getFaxNr(): string
    {
        return $this->FaxNr;
    }

    /**
     * @return bool
     */
    public function isIsMailingAddress(): bool
    {
        return $this->IsMailingAddress;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }

    /**
     * @return string
     */
    public function getTCN(): string
    {
        return $this->TCN;
    }
}
