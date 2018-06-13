<?php

namespace FEIWebServicesClient\Horse\Types;

class ChangeHorseName
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseName
     */
    private $HorseName = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseName
     */
    public function getHorseName(): \FEIWebServicesClient\Horse\Types\HorseName
    {
        return $this->HorseName;
    }
}
