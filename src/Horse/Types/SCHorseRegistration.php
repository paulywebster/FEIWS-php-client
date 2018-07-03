<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseRegistration
{
    /**
     * @var RegistrationEnum
     */
    private $Status;

    /**
     * @var int
     */
    private $Year;

    /**
     * @return RegistrationEnum
     */
    public function getStatus(): RegistrationEnum
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
