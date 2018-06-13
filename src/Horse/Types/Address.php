<?php

namespace FEIWebServicesClient\Horse\Types;

class Address
{
    /**
     * @var string
     */
    private $CountryCode = null;

    /**
     * @var string
     */
    private $AddressNameCode = null;

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
    private $PhoneNr = null;

    /**
     * @var string
     */
    private $FaxNr = null;

    /**
     * @var bool
     */
    private $IsMailingAddress = null;

    /**
     * @var string
     */
    private $Comment = null;

    /**
     * @var string
     */
    private $TCN = null;

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
