<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assert;

class HorseOwnershipMember
{
    /**
     * @var int
     */
    private $FEIID;

    /**
     * @var string
     */
    private $FamilyName;

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var string
     */
    private $CorporationName;

    /**
     * @var Address
     */
    private $Address;

    /**
     * @var int
     */
    private $CorporationContactFEIID;

    /**
     * @var string
     */
    private $CorporationContactFamilyName;

    /**
     * @var string
     */
    private $CorporationContactFirstName;

    /**
     * @var float
     */
    private $OwnershipPercentage;

    public function __construct(array $member) {
        Assert::that($member)
            ->keyExists('FEIID')
            ->keyExists('Address')
            ->keyExists('OwnershipPercentage')
        ;

        $FEIId = new FEIID($member['FEIID']);
        $this->FEIID = $FEIId->number();
        if($FEIId->isPhysicalPerson()){
            Assert::that($member)
                ->keyExists('FamilyName')
                ->keyExists('FirstName');
            Assert::that($member['FamilyName'])->string()->notBlank();
            Assert::that($member['FirstName'])->string()->notBlank();
            $this->FamilyName = $member['FamilyName'];
            $this->FirstName = $member['FirstName'];
        } else {
            Assert::that($member)
                ->keyExists('CorporationName')
                ->keyExists('CorporationContactFEIID')
                ->keyExists('CorporationContactFamilyName')
                ->keyExists('CorporationContactFirstName')
            ;
            Assert::that($member['CorporationName'])->string()->notBlank();
            $this->CorporationName = $member['CorporationName'];
            $this->CorporationContactFEIID = (new FEIID($member['CorporationContactFEIID']))->number();
            Assert::that($member['CorporationContactFamilyName'])->string()->notBlank();
            $this->CorporationContactFamilyName = $member['CorporationContactFamilyName'];
            Assert::that($member['CorporationContactFirstName'])->string()->notBlank();
            $this->CorporationContactFirstName = $member['CorporationContactFirstName'];
        }

        $this->Address = new Address($member['Address']);
        $this->OwnershipPercentage = $member['OwnershipPercentage'];
    }

    public function data(): array
    {
        return [
            'FEIID' => $this->FEIID,
            'FamilyName' => $this->FamilyName,
            'FirstName' => $this->FirstName,
            'CorporationName' => $this->CorporationName,
            'CorporationContactFEIID' => $this->CorporationContactFEIID,
            'CorporationContactFamilyName' => $this->CorporationContactFamilyName,
            'CorporationContactFirstName' => $this->CorporationContactFirstName,
            'Address' => $this->Address->data(),
            'OwnershipPercentage' => $this->OwnershipPercentage,
        ];
    }

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
     * @return Address
     */
    public function getAddress(): Address
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
