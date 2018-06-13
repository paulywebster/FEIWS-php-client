<?php

namespace FEIWebServicesClient\Horse\Types;

class GetHorse
{
    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }
}
