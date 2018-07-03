<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ChangeHorseName implements RequestInterface
{
    /**
     * @var HorseName
     */
    private $HorseName;

    /**
     * @return HorseName
     */
    public function getHorseName(): HorseName
    {
        return $this->HorseName;
    }
}
