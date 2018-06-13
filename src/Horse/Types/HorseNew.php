<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseNew
{
    /**
     * @var string
     */
    private $OwnerName = null;

    /**
     * @var \DateTime
     */
    private $OwnerDateFrom = null;

    /**
     * @var string
     */
    private $OwnerAddress1 = null;

    /**
     * @var string
     */
    private $OwnerAddress2 = null;

    /**
     * @var string
     */
    private $OwnerAddress3 = null;

    /**
     * @var string
     */
    private $OwnerZip = null;

    /**
     * @var string
     */
    private $OwnerCity = null;

    /**
     * @var string
     */
    private $OwnerCountryCode = null;

    /**
     * @var string
     */
    private $OwnerNationalityCode = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    private $Ownership = null;

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
