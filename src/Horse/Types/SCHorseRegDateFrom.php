<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseRegDateFrom
{
    /**
     * @var \DateTime
     */
    private $Value;

    /**
     * @return \DateTime
     */
    public function getValue(): \DateTime
    {
        return $this->Value;
    }
}
