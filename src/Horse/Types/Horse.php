<?php

namespace FEIWebServicesClient\Horse\Types;

class Horse
{
    /**
     * @var string
     */
    private $FEICode = null;

    /**
     * @var string
     */
    private $AdmNFCode = null;

    /**
     * @var string
     */
    private $CurrentName = null;

    /**
     * @var string
     */
    private $CommercialName = null;

    /**
     * @var string
     */
    private $BirthName = null;

    /**
     * @var string
     */
    private $ShortName = null;

    /**
     * @var string
     */
    private $CompleteName = null;

    /**
     * @var bool
     */
    private $IsCNSuffix = null;

    /**
     * @var string
     */
    private $GenderCode = null;

    /**
     * @var string
     */
    private $ColorCode = null;

    /**
     * @var string
     */
    private $BirthCountryCode = null;

    /**
     * @var \DateTime
     */
    private $DateBirth = null;

    /**
     * @var \DateTime
     */
    private $DateRetirement = null;

    /**
     * @var \DateTime
     */
    private $DateDeath = null;

    /**
     * @var string
     */
    private $ColorComplement = null;

    /**
     * @var bool
     */
    private $IsActive = null;

    /**
     * @var string
     */
    private $InactiveReason = null;

    /**
     * @var int
     */
    private $CastratedId = null;

    /**
     * @var \DateTime
     */
    private $DateCastration = null;

    /**
     * @var int
     */
    private $Height = null;

    /**
     * @var bool
     */
    private $IsPony = null;

    /**
     * @var string
     */
    private $Breed = null;

    /**
     * @var string
     */
    private $Breeder = null;

    /**
     * @var string
     */
    private $StudBookCode = null;

    /**
     * @var string
     */
    private $FEICodeType = null;

    /**
     * @var string
     */
    private $UELN = null;

    /**
     * @var string
     */
    private $Microchip = null;

    /**
     * @var string
     */
    private $NatPassport = null;

    /**
     * @var string
     */
    private $RecognitionCode = null;

    /**
     * @var string
     */
    private $NFData = null;

    /**
     * @var string
     */
    private $IssuingNFCode = null;

    /**
     * @var string
     */
    private $IssuingBodyCode = null;

    /**
     * @var \DateTime
     */
    private $DateIssuing = null;

    /**
     * @var \DateTime
     */
    private $DateOfExpiry = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseTrainer
     */
    private $Trainer = null;

    /**
     * @var int
     */
    private $EnduranceQualificationLevel = null;

    /**
     * @var \DateTime
     */
    private $EnduranceRestPeriodEnd = null;

    /**
     * @var string
     */
    private $TCN = null;

    /**
     * @var string
     */
    private $HorseSireName = null;

    /**
     * @var string
     */
    private $HorseSireUELN = null;

    /**
     * @var string
     */
    private $HorseDamName = null;

    /**
     * @var string
     */
    private $HorseDamUELN = null;

    /**
     * @var string
     */
    private $HorseSireOfDamName = null;

    /**
     * @var string
     */
    private $HorseSireOfDamUELN = null;

    /**
     * @var string
     */
    private $KindOfName = null;

    /**
     * @var bool
     */
    private $MissingDocuments = null;

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
