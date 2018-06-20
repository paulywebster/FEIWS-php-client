<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseName
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var \DateTime
     */
    private $DateChange;

    /**
     * @var string
     */
    private $ChangedBy;

    /**
     * @var string
     */
    private $ReasonNF;

    /**
     * @var string
     */
    private $ReasonFEI;

    /**
     * @var string
     */
    private $CurrentName;

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
    private $CommercialName;

    /**
     * @var bool
     */
    private $IsCNSuffix;

    /**
     * @var string
     */
    private $TCN;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return \DateTime
     */
    public function getDateChange(): \DateTime
    {
        return $this->DateChange;
    }

    /**
     * @return string
     */
    public function getChangedBy(): string
    {
        return $this->ChangedBy;
    }

    /**
     * @return string
     */
    public function getReasonNF(): string
    {
        return $this->ReasonNF;
    }

    /**
     * @return string
     */
    public function getReasonFEI(): string
    {
        return $this->ReasonFEI;
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
    public function getCommercialName(): string
    {
        return $this->CommercialName;
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
    public function getTCN(): string
    {
        return $this->TCN;
    }
}
