<?php

namespace FEIWebServicesClient\Horse\Types;

class DeleteHorseNoviceQualification
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
