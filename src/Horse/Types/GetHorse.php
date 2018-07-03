<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetHorse implements RequestInterface
{
    /**
     * @var string
     */
    private $HorseFEICode;

    public function __construct(HorseFEICode $HorseFEICode)
    {
        $this->HorseFEICode = $HorseFEICode;
    }

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }
}
