<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseCurrentOwner
{
    /**
     * @var string
     */
    private $Value;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
}
