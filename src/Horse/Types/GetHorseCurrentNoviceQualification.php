<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetHorseCurrentNoviceQualification implements RequestInterface
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
