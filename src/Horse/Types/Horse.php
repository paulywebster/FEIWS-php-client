<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assert;
use FEIWebServicesClient\Common\Types\Country;
use FEIWebServicesClient\Shared\Types\NationalFederation;

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
    private $IsCNSuffix = false;

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
     * @var \DateTimeImmutable
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
     * @var HorseTrainer
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

    public function __construct(array $arrayHorse)
    {
        Assert::that($arrayHorse)
            ->keyExists('BirthName')
            ->keyExists('DateBirth')
            ->keyExists('CastratedId')
            ->keyExists('CurrentName')
            ->keyExists('IsPony')
            ->keyExists('NatPassport')
            ->keyExists('IsActive')
            ->keyExists('GenderCode')
            ->keyExists('ColorCode')
            ->keyExists('IssuingNFCode')
            ->keyExists('Microchip')
            ->keyExists('RecognitionCode')
        ;

        $this->BirthName = (string) HorseNameFactory::createAsCurrentOrBirthName($arrayHorse['BirthName']);
        $this->CurrentName = (string) HorseNameFactory::createAsCurrentOrBirthName($arrayHorse['CurrentName']);

        $dateBirth = new \DateTimeImmutable($arrayHorse['DateBirth']);
        if ($dateBirth <= new \DateTimeImmutable('1980-01-01') || $dateBirth > new \DateTimeImmutable('now')) {
            throw new \LogicException('The birthdate cannot be set before 1980-01-01 or in the future.');
        }
        $this->DateBirth = $dateBirth;

        Assert::that($arrayHorse['CastratedId'])->inArray([1, 2, 3]);
        $this->CastratedId = $arrayHorse['CastratedId'];

        Assert::that($arrayHorse['IsPony'])->boolean();
        $this->IsPony = $arrayHorse['IsPony'];

        Assert::that($arrayHorse['NatPassport'])->maxLength(20)->notBlank();
        $this->NatPassport = $arrayHorse['NatPassport'];

        Assert::that($arrayHorse['IsActive'])->boolean();
        $this->IsActive = $arrayHorse['IsActive'];

        Assert::that($arrayHorse['GenderCode'])->inArray(['M', 'F']);
        if ('M' !== $arrayHorse['GenderCode'] && \in_array($this->CastratedId, [1, 3])) {
            throw new \InvalidArgumentException('The gender code expected with the CastratedId given must be M.');
        }

        $this->GenderCode = $arrayHorse['GenderCode'];

        Assert::that($arrayHorse['ColorCode'])->inArray(['other', 'bay', 'black', 'chestnut', 'grey ']);
        $this->ColorCode = $arrayHorse['ColorCode'];
        if ('other' === $arrayHorse['ColorCode']) {
            Assert::that($arrayHorse)->keyExists('ColorComplement');
            Assert::that($arrayHorse['ColorComplement'])->maxLength(50);
            $this->ColorComplement = $arrayHorse['ColorComplement'];
        }

        if (array_key_exists('FEICodeType', $arrayHorse)) {
            Assert::that($arrayHorse['FEICodeType'])->inArray(['R', 'C', 'P']);
            $FEICodeType = $arrayHorse['FEICodeType'];
        }
        $this->FEICodeType = $FEICodeType ?? 'R';

        if ('R' === $this->FEICodeType) {
            Assert::that($arrayHorse)->keyExists('IssuingBodyCode');
        }
        if (array_key_exists('IssuingBodyCode', $arrayHorse)) {
            Assert::that($arrayHorse['IssuingBodyCode'])->notBlank();
            $this->IssuingBodyCode = (new IssuingBody($arrayHorse['IssuingBodyCode']))->code();
        }

        Assert::that($arrayHorse['RecognitionCode'])->notBlank()->maxLength(20);

        $this->RecognitionCode = $arrayHorse['RecognitionCode'];
        $this->Microchip = (string) new Chip($arrayHorse['Microchip']);
        $this->IssuingNFCode = (string) new NationalFederation(Country::create($arrayHorse['IssuingNFCode']));
    }

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
     * @return \DateTimeImmutable
     */
    public function getDateBirth(): \DateTimeImmutable
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
     * @return string|null
     */
    public function getColorComplement(): ? string
    {
        return $this->ColorComplement;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
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
    public function isPony(): bool
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
     * @return HorseTrainer
     */
    public function getTrainer(): HorseTrainer
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
