<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assert;

class HorseNew extends Horse
{
    /**
     * @var string
     */
    private $OwnerName;

    /**
     * @var \DateTimeImmutable
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
     * @var HorseOwnership
     */
    private $Ownership;

    public function __construct(array $horse)
    {
        parent::__construct($horse);

        Assert::that($horse)
            ->keyExists('OwnerDateFrom')
            ->keyExists('Ownership')
            ;

        $ownerDateFrom = new \DateTimeImmutable($horse['OwnerDateFrom']);
        if ($ownerDateFrom < $this->getDateBirth() || $ownerDateFrom > new \DateTimeImmutable('now')) {
            throw new \LogicException('The ownership date from cannot be set before the birthdate or in the future.');
        }
        $this->OwnerDateFrom = $ownerDateFrom;
        $this->Ownership = new HorseOwnership($horse['Ownership'], $this->getDateBirth());
    }

    public function data(): array
    {
        return [
            'BirthName' => $this->getBirthName(),
            'IsCNSuffix' => $this->isIsCNSuffix(),
            'DateBirth' => $this->getDateBirth(),
            'CastratedId' => $this->getCastratedId(),
            'OwnerDateFrom' => $this->getOwnerDateFrom(),
            'CurrentName' => $this->getCurrentName(),
            'IsPony' => $this->isPony(),
            'NatPassport' => $this->getNatPassport(),
            'IsActive' => $this->isActive(),
            'GenderCode' => $this->getGenderCode(),
            'ColorCode' => $this->getColorCode(),
            'ColorComplement' => $this->getColorComplement(),
            'FEICodeType' => $this->getFEICodeType(),
            'IssuingNFCode' => $this->getIssuingNFCode(),
            'Microchip' => $this->getMicrochip(),
            'IssuingBodyCode' => $this->getIssuingBodyCode(),
            'RecognitionCode' => $this->getRecognitionCode(),
            'Ownership' => $this->Ownership->data(),
        ];
    }

    /**
     * @return string
     */
    public function getOwnerName(): string
    {
        return $this->OwnerName;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getOwnerDateFrom(): \DateTimeImmutable
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
     * @return HorseOwnership
     */
    public function getOwnership(): HorseOwnership
    {
        return $this->Ownership;
    }
}
