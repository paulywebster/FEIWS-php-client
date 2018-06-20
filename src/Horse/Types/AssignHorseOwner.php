<?php

namespace FEIWebServicesClient\Horse\Types;

class AssignHorseOwner
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwner
     */
    private $Owner;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseOwner
     */
    public function getOwner(): \FEIWebServicesClient\Horse\Types\HorseOwner
    {
        return $this->Owner;
    }
}
