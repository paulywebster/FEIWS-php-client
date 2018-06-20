<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseRegDateTo
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
