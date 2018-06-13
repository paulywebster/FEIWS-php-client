<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseRegDateTo
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
