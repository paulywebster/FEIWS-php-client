<?php

namespace FEIWebServicesClient\Horse\Types;

class GetHorseRegistrationYearList
{

    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @var int
     */
    private $Year = null;

    /**
     * @return string
     */
    public function getHorseFEICode() : string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return int
     */
    public function getYear() : int
    {
        return $this->Year;
    }


}

