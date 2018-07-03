<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseHorseStatus
{
    /**
     * @var StatusEnum
     */
    private $Value;

    /**
     * @return StatusEnum
     */
    public function getValue(): StatusEnum
    {
        return $this->Value;
    }
}
