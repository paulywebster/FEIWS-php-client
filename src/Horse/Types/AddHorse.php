<?php

namespace FEIWebServicesClient\Horse\Types;

class AddHorse
{

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseNew
     */
    private $Horse = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseNew
     */
    public function getHorse() : \FEIWebServicesClient\Horse\Types\HorseNew
    {
        return $this->Horse;
    }


}

