<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteHorseNoviceQualification implements RequestInterface
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
