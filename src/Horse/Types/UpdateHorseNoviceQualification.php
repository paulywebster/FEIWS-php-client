<?php

namespace FEIWebServicesClient\Horse\Types;

class UpdateHorseNoviceQualification
{
    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @var \DateTime
     */
    private $NoviceQualificationDate = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
     */
    private $NationalResults = null;

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
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
     */
    public function getNationalResults(): \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
    {
        return $this->NationalResults;
    }
}
