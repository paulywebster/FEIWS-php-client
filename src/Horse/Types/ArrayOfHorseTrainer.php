<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseTrainer
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseTrainer
     */
    private $HorseTrainer;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseTrainer
     */
    public function getHorseTrainer(): \FEIWebServicesClient\Horse\Types\HorseTrainer
    {
        return $this->HorseTrainer;
    }
}
