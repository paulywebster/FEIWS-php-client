<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AssignHorseOwnership implements RequestInterface
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var HorseOwnership
     */
    private $Ownership;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return HorseOwnership
     */
    public function getOwnership(): HorseOwnership
    {
        return $this->Ownership;
    }
}
