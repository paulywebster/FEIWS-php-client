<?php

namespace FEIWebServicesClient\Horse\Types;

class AddHorseNoviceQualification
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
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
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
     */
    public function getNationalResults(): \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
    {
        return $this->NationalResults;
    }
}
