<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseStudbook
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
