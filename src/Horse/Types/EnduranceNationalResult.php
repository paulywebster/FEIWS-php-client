<?php

namespace FEIWebServicesClient\Horse\Types;

class EnduranceNationalResult
{
    /**
     * @var float
     */
    private $AverageSpeed;

    /**
     * @var float
     */
    private $Distance;

    /**
     * @var int
     */
    private $RankPosition;

    /**
     * @var string
     */
    private $VenueName;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @var \DateTime
     */
    private $CompetitionDate;

    /**
     * @return float
     */
    public function getAverageSpeed(): float
    {
        return $this->AverageSpeed;
    }

    /**
     * @return float
     */
    public function getDistance(): float
    {
        return $this->Distance;
    }

    /**
     * @return int
     */
    public function getRankPosition(): int
    {
        return $this->RankPosition;
    }

    /**
     * @return string
     */
    public function getVenueName(): string
    {
        return $this->VenueName;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    /**
     * @return \DateTime
     */
    public function getCompetitionDate(): \DateTime
    {
        return $this->CompetitionDate;
    }
}
