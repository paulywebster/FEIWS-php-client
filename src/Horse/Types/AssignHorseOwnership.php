<?php

namespace FEIWebServicesClient\Horse\Types;

class AssignHorseOwnership
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    private $Ownership;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    public function getOwnership(): \FEIWebServicesClient\Horse\Types\HorseOwnership
    {
        return $this->Ownership;
    }
}
