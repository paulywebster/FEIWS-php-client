<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseHorseStatus
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\StatusEnum
     */
    private $Value = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\StatusEnum
     */
    public function getValue(): \FEIWebServicesClient\Horse\Types\StatusEnum
    {
        return $this->Value;
    }
}
