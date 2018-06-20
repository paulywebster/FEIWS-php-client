<?php

namespace FEIWebServicesClient\Horse\Types;

class GetHorseRegistrationYearList
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var int
     */
    private $Year;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->Year;
    }
}
