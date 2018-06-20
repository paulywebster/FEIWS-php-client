<?php

namespace FEIWebServicesClient\Horse\Types;

class Horse
{
    /**
     * @var string
     */
    private $FEICode;

    /**
     * @var string
     */
    private $AdmNFCode;

    /**
     * @var string
     */
    private $CurrentName;

    /**
     * @var string
     */
    private $CommercialName;

    /**
     * @var string
     */
    private $BirthName;

    /**
     * @var string
     */
    private $ShortName;

    /**
     * @var string
     */
    private $CompleteName;

    /**
     * @var bool
     */
    private $IsCNSuffix;

    /**
     * @var string
     */
    private $GenderCode;

    /**
     * @var string
     */
    private $ColorCode;

    /**
     * @var string
     */
    private $BirthCountryCode;

    /**
     * @var \DateTime
     */
    private $DateBirth;

    /**
     * @var \DateTime
     */
    private $DateRetirement;

    /**
     * @var \DateTime
     */
    private $DateDeath;

    /**
     * @var string
     */
    private $ColorComplement;

    /**
     * @var bool
     */
    private $IsActive;

    /**
     * @var string
     */
    private $InactiveReason;

    /**
     * @var int
     */
    private $CastratedId;

    /**
     * @var \DateTime
     */
    private $DateCastration;

    /**
     * @var int
     */
    private $Height;

    /**
     * @var bool
     */
    private $IsPony;

    /**
     * @var string
     */
    private $Breed;

    /**
     * @var string
     */
    private $Breeder;

    /**
     * @var string
     */
    private $StudBookCode;

    /**
     * @var string
     */
    private $FEICodeType;

    /**
     * @var string
     */
    private $UELN;

    /**
     * @var string
     */
    private $Microchip;

    /**
     * @var string
     */
    private $NatPassport;

    /**
     * @var string
     */
    private $RecognitionCode;

    /**
     * @var string
     */
    private $NFData;

    /**
     * @var string
     */
    private $IssuingNFCode;

    /**
     * @var string
     */
    private $IssuingBodyCode;

    /**
     * @var \DateTime
     */
    private $DateIssuing;

    /**
     * @var \DateTime
     */
    private $DateOfExpiry;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseTrainer
     */
    private $Trainer;

    /**
     * @var int
     */
    private $EnduranceQualificationLevel;

    /**
     * @var \DateTime
     */
    private $EnduranceRestPeriodEnd;

    /**
     * @var string
     */
    private $TCN;

    /**
     * @var string
     */
    private $HorseSireName;

    /**
     * @var string
     */
    private $HorseSireUELN;

    /**
     * @var string
     */
    private $HorseDamName;

    /**
     * @var string
     */
    private $HorseDamUELN;

    /**
     * @var string
     */
    private $HorseSireOfDamName;

    /**
     * @var string
     */
    private $HorseSireOfDamUELN;

    /**
     * @var string
     */
    private $KindOfName;

    /**
     * @var bool
     */
    private $MissingDocuments;

    /**
     * @return string
     */
    public function getFEICode(): string
    {
        return $this->FEICode;
    }

    /**
     * @return string
     */
    public function getAdmNFCode(): string
    {
        return $this->AdmNFCode;
    }

    /**
     * @return string
     */
    public function getCurrentName(): string
    {
        return $this->CurrentName;
    }

    /**
     * @return string
     */
    public function getCommercialName(): string
    {
        return $this->CommercialName;
    }

    /**
     * @return string
     */
    public function getBirthName(): string
    {
        return $this->BirthName;
    }

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->ShortName;
    }

    /**
     * @return string
     */
    public function getCompleteName(): string
    {
        return $this->CompleteName;
    }

    /**
     * @return bool
     */
    public function isIsCNSuffix(): bool
    {
        return $this->IsCNSuffix;
    }

    /**
     * @return string
     */
    public function getGenderCode(): string
    {
        return $this->GenderCode;
    }

    /**
     * @return string
     */
    public function getColorCode(): string
    {
        return $this->ColorCode;
    }

    /**
     * @return string
     */
    public function getBirthCountryCode(): string
    {
        return $this->BirthCountryCode;
    }

    /**
     * @return \DateTime
     */
    public function getDateBirth(): \DateTime
    {
        return $this->DateBirth;
    }

    /**
     * @return \DateTime
     */
    public function getDateRetirement(): \DateTime
    {
        return $this->DateRetirement;
    }

    /**
     * @return \DateTime
     */
    public function getDateDeath(): \DateTime
    {
        return $this->DateDeath;
    }

    /**
     * @return string
     */
    public function getColorComplement(): string
    {
        return $this->ColorComplement;
    }

    /**
     * @return bool
     */
    public function isIsActive(): bool
    {
        return $this->IsActive;
    }

    /**
     * @return string
     */
    public function getInactiveReason(): string
    {
        return $this->InactiveReason;
    }

    /**
     * @return int
     */
    public function getCastratedId(): int
    {
        return $this->CastratedId;
    }

    /**
     * @return \DateTime
     */
    public function getDateCastration(): \DateTime
    {
        return $this->DateCastration;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->Height;
    }

    /**
     * @return bool
     */
    public function isIsPony(): bool
    {
        return $this->IsPony;
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->Breed;
    }

    /**
     * @return string
     */
    public function getBreeder(): string
    {
        return $this->Breeder;
    }

    /**
     * @return string
     */
    public function getStudBookCode(): string
    {
        return $this->StudBookCode;
    }

    /**
     * @return string
     */
    public function getFEICodeType(): string
    {
        return $this->FEICodeType;
    }

    /**
     * @return string
     */
    public function getUELN(): string
    {
        return $this->UELN;
    }

    /**
     * @return string
     */
    public function getMicrochip(): string
    {
        return $this->Microchip;
    }

    /**
     * @return string
     */
    public function getNatPassport(): string
    {
        return $this->NatPassport;
    }

    /**
     * @return string
     */
    public function getRecognitionCode(): string
    {
        return $this->RecognitionCode;
    }

    /**
     * @return string
     */
    public function getNFData(): string
    {
        return $this->NFData;
    }

    /**
     * @return string
     */
    public function getIssuingNFCode(): string
    {
        return $this->IssuingNFCode;
    }

    /**
     * @return string
     */
    public function getIssuingBodyCode(): string
    {
        return $this->IssuingBodyCode;
    }

    /**
     * @return \DateTime
     */
    public function getDateIssuing(): \DateTime
    {
        return $this->DateIssuing;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfExpiry(): \DateTime
    {
        return $this->DateOfExpiry;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseTrainer
     */
    public function getTrainer(): \FEIWebServicesClient\Horse\Types\HorseTrainer
    {
        return $this->Trainer;
    }

    /**
     * @return int
     */
    public function getEnduranceQualificationLevel(): int
    {
        return $this->EnduranceQualificationLevel;
    }

    /**
     * @return \DateTime
     */
    public function getEnduranceRestPeriodEnd(): \DateTime
    {
        return $this->EnduranceRestPeriodEnd;
    }

    /**
     * @return string
     */
    public function getTCN(): string
    {
        return $this->TCN;
    }

    /**
     * @return string
     */
    public function getHorseSireName(): string
    {
        return $this->HorseSireName;
    }

    /**
     * @return string
     */
    public function getHorseSireUELN(): string
    {
        return $this->HorseSireUELN;
    }

    /**
     * @return string
     */
    public function getHorseDamName(): string
    {
        return $this->HorseDamName;
    }

    /**
     * @return string
     */
    public function getHorseDamUELN(): string
    {
        return $this->HorseDamUELN;
    }

    /**
     * @return string
     */
    public function getHorseSireOfDamName(): string
    {
        return $this->HorseSireOfDamName;
    }

    /**
     * @return string
     */
    public function getHorseSireOfDamUELN(): string
    {
        return $this->HorseSireOfDamUELN;
    }

    /**
     * @return string
     */
    public function getKindOfName(): string
    {
        return $this->KindOfName;
    }

    /**
     * @return bool
     */
    public function isMissingDocuments(): bool
    {
        return $this->MissingDocuments;
    }
}
