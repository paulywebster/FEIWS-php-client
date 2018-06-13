<?php

namespace FEIWebServicesClient\Horse\Types;

class AssignHorseOwnership
{
    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    private $Ownership = null;

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
