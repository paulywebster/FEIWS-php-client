<?php

namespace FEIWebServicesClient\Horse\Types;

class UpdateHorse
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\Horse
     */
    private $Horse = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\Horse
     */
    public function getHorse(): \FEIWebServicesClient\Horse\Types\Horse
    {
        return $this->Horse;
    }
}
