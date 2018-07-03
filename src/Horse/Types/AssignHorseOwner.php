<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AssignHorseOwner implements RequestInterface
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var HorseOwner
     */
    private $Owner;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return HorseOwner
     */
    public function getOwner(): HorseOwner
    {
        return $this->Owner;
    }
}
