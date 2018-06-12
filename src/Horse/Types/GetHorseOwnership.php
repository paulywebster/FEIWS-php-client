<?php

namespace FEIWebServicesClient\Horse\Types;

class GetHorseOwnership
{

    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @return string
     */
    public function getHorseFEICode() : string
    {
        return $this->HorseFEICode;
    }


}

