<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseName
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseName
     */
    private $HorseName;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseName
     */
    public function getHorseName(): \FEIWebServicesClient\Horse\Types\HorseName
    {
        return $this->HorseName;
    }
}
