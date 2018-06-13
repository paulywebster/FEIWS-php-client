<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseOwnershipMember
{
    /**
     * @var int
     */
    private $FEIID = null;

    /**
     * @var string
     */
    private $FamilyName = null;

    /**
     * @var string
     */
    private $FirstName = null;

    /**
     * @var string
     */
    private $CorporationName = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\Address
     */
    private $Address = null;

    /**
     * @var int
     */
    private $CorporationContactFEIID = null;

    /**
     * @var string
     */
    private $CorporationContactFamilyName = null;

    /**
     * @var string
     */
    private $CorporationContactFirstName = null;

    /**
     * @var float
     */
    private $OwnershipPercentage = null;

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
    public function getFamilyName(): string
    {
        return $this->FamilyName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    /**
     * @return string
     */
    public function getCorporationName(): string
    {
        return $this->CorporationName;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\Address
     */
    public function getAddress(): \FEIWebServicesClient\Horse\Types\Address
    {
        return $this->Address;
    }

    /**
     * @return int
     */
    public function getCorporationContactFEIID(): int
    {
        return $this->CorporationContactFEIID;
    }

    /**
     * @return string
     */
    public function getCorporationContactFamilyName(): string
    {
        return $this->CorporationContactFamilyName;
    }

    /**
     * @return string
     */
    public function getCorporationContactFirstName(): string
    {
        return $this->CorporationContactFirstName;
    }

    /**
     * @return float
     */
    public function getOwnershipPercentage(): float
    {
        return $this->OwnershipPercentage;
    }
}
