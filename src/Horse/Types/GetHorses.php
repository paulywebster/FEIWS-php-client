<?php

namespace FEIWebServicesClient\Horse\Types;

class GetHorses
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfString
     */
    private $HorseFEICodes = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfString
     */
    public function getHorseFEICodes(): \FEIWebServicesClient\Horse\Types\ArrayOfString
    {
        return $this->HorseFEICodes;
    }
}
