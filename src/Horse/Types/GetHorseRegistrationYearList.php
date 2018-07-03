<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetHorseRegistrationYearList implements RequestInterface
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
