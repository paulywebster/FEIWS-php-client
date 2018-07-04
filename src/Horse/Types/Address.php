<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assert;
use FEIWebServicesClient\Shared\Types\Country;

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

    public function __construct(array $address)
    {
        Assert::that($address)
            ->keyExists('CountryCode')
            ->keyExists('Address1')
            ->keyExists('Zip')
            ->keyExists('City')
            ->keyExists('IsMailingAddress')
        ;
        $this->CountryCode = Country::fromString($address['CountryCode'])->FEIcode();

        Assert::that($address['Address1'])->string()->notBlank();
        $this->Address1 = $address['Address1'];
        Assert::that($address['Zip'])->string()->notBlank();
        $this->Zip = $address['Zip'];
        Assert::that($address['City'])->string()->notBlank();
        $this->City = $address['City'];
        Assert::that($address['IsMailingAddress'])->boolean();
        $this->IsMailingAddress = $address['IsMailingAddress'];

        $this->AddressNameCode = $address['AddressNameCode'] ?? null;
        $this->Address2 = $address['Address2'] ?? null;
        $this->Address3 = $address['Address3'] ?? null;
        $this->PhoneNr = $address['PhoneNr'] ?? null;
        $this->FaxNr = $address['FaxNr'] ?? null;
        $this->Comment = $address['Comment'] ?? null;
        $this->TCN = $address['TCN'] ?? null;
    }

    public function data(): array
    {
        return [
            'CountryCode' => $this->CountryCode,
            'Address1' => $this->Address1,
            'Zip' => $this->Zip,
            'City' => $this->City,
            'IsMailingAddress' => $this->IsMailingAddress,
            'AddressNameCode' => $this->AddressNameCode,
            'Address2' => $this->Address2,
            'Address3' => $this->Address3,
            'PhoneNr' => $this->PhoneNr,
            'FaxNr' => $this->FaxNr,
            'Comment' => $this->Comment,
            'TCN' => $this->TCN,
        ];
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
