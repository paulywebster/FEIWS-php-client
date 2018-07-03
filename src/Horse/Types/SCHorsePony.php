<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorsePony
{
    /**
     * @var PonyEnum
     */
    private $Value;

    /**
     * @return PonyEnum
     */
    public function getValue(): PonyEnum
    {
        return $this->Value;
    }
}
