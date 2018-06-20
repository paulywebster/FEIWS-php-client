<?php

namespace FEIWebServicesClient\Horse\Types;

class RequestAdministrationChange
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }
}
