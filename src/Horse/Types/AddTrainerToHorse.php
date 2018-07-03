<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AddTrainerToHorse implements RequestInterface
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var int
     */
    private $PersonFEIID;

    /**
     * @var \DateTime
     */
    private $TrainerStartDate;

    /**
     * @var \DateTime
     */
    private $TrainerEndDate;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return int
     */
    public function getPersonFEIID(): int
    {
        return $this->PersonFEIID;
    }

    /**
     * @return \DateTime
     */
    public function getTrainerStartDate(): \DateTime
    {
        return $this->TrainerStartDate;
    }

    /**
     * @return \DateTime
     */
    public function getTrainerEndDate(): \DateTime
    {
        return $this->TrainerEndDate;
    }
}
