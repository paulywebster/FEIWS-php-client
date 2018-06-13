<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseTrainer
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseTrainer
     */
    private $HorseTrainer = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseTrainer
     */
    public function getHorseTrainer(): \FEIWebServicesClient\Horse\Types\HorseTrainer
    {
        return $this->HorseTrainer;
    }
}
