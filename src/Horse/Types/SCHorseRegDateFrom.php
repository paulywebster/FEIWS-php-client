<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseRegDateFrom
{
    /**
     * @var \DateTime
     */
    private $Value = null;

    /**
     * @return \DateTime
     */
    public function getValue(): \DateTime
    {
        return $this->Value;
    }
}
