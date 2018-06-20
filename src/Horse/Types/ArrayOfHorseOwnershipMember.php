<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseOwnershipMember
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwnershipMember
     */
    private $HorseOwnershipMember;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseOwnershipMember
     */
    public function getHorseOwnershipMember(): \FEIWebServicesClient\Horse\Types\HorseOwnershipMember
    {
        return $this->HorseOwnershipMember;
    }
}
