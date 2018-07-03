<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateHorseNoviceQualification implements RequestInterface
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var \DateTime
     */
    private $NoviceQualificationDate;

    /**
     * @var ArrayOfEnduranceNationalResult
     */
    private $NationalResults;

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
    public function getNoviceQualificationDate(): \DateTime
    {
        return $this->NoviceQualificationDate;
    }

    /**
     * @return ArrayOfEnduranceNationalResult
     */
    public function getNationalResults(): ArrayOfEnduranceNationalResult
    {
        return $this->NationalResults;
    }
}
