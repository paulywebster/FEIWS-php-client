<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseRegistration
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseRegistration
     */
    private $HorseRegistration;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseRegistration
     */
    public function getHorseRegistration(): \FEIWebServicesClient\Horse\Types\HorseRegistration
    {
        return $this->HorseRegistration;
    }
}
