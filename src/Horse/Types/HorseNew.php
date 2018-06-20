<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseNew
{
    /**
     * @var string
     */
    private $OwnerName;

    /**
     * @var \DateTime
     */
    private $OwnerDateFrom;

    /**
     * @var string
     */
    private $OwnerAddress1;

    /**
     * @var string
     */
    private $OwnerAddress2;

    /**
     * @var string
     */
    private $OwnerAddress3;

    /**
     * @var string
     */
    private $OwnerZip;

    /**
     * @var string
     */
    private $OwnerCity;

    /**
     * @var string
     */
    private $OwnerCountryCode;

    /**
     * @var string
     */
    private $OwnerNationalityCode;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    private $Ownership;

    /**
     * @return string
     */
    public function getOwnerName(): string
    {
        return $this->OwnerName;
    }

    /**
     * @return \DateTime
     */
    public function getOwnerDateFrom(): \DateTime
    {
        return $this->OwnerDateFrom;
    }

    /**
     * @return string
     */
    public function getOwnerAddress1(): string
    {
        return $this->OwnerAddress1;
    }

    /**
     * @return string
     */
    public function getOwnerAddress2(): string
    {
        return $this->OwnerAddress2;
    }

    /**
     * @return string
     */
    public function getOwnerAddress3(): string
    {
        return $this->OwnerAddress3;
    }

    /**
     * @return string
     */
    public function getOwnerZip(): string
    {
        return $this->OwnerZip;
    }

    /**
     * @return string
     */
    public function getOwnerCity(): string
    {
        return $this->OwnerCity;
    }

    /**
     * @return string
     */
    public function getOwnerCountryCode(): string
    {
        return $this->OwnerCountryCode;
    }

    /**
     * @return string
     */
    public function getOwnerNationalityCode(): string
    {
        return $this->OwnerNationalityCode;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    public function getOwnership(): \FEIWebServicesClient\Horse\Types\HorseOwnership
    {
        return $this->Ownership;
    }
}
