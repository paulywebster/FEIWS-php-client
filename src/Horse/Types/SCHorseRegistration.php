<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseRegistration
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\RegistrationEnum
     */
    private $Status;

    /**
     * @var int
     */
    private $Year;

    /**
     * @return \FEIWebServicesClient\Horse\Types\RegistrationEnum
     */
    public function getStatus(): \FEIWebServicesClient\Horse\Types\RegistrationEnum
    {
        return $this->Status;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->Year;
    }
}
