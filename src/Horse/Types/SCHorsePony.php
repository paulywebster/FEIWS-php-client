<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorsePony
{

    /**
     * @var \FEIWebServicesClient\Horse\Types\PonyEnum
     */
    private $Value = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\PonyEnum
     */
    public function getValue() : \FEIWebServicesClient\Horse\Types\PonyEnum
    {
        return $this->Value;
    }


}

