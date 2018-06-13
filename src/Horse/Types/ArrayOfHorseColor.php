<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseColor
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseColor
     */
    private $HorseColor = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseColor
     */
    public function getHorseColor(): \FEIWebServicesClient\Horse\Types\HorseColor
    {
        return $this->HorseColor;
    }
}
