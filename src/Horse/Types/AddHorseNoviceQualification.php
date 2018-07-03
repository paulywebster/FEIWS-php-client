<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AddHorseNoviceQualification implements RequestInterface
{
    /**
     * @var string
     */
    private $HorseFEICode;

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
     * @return ArrayOfEnduranceNationalResult
     */
    public function getNationalResults(): ArrayOfEnduranceNationalResult
    {
        return $this->NationalResults;
    }
}
