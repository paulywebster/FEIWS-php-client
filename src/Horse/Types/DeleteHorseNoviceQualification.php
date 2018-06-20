<?php

namespace FEIWebServicesClient\Horse\Types;

class DeleteHorseNoviceQualification
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
}
