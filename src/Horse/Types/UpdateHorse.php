<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateHorse implements RequestInterface
{
    /**
     * @var Horse
     */
    private $Horse;

    /**
     * @return Horse
     */
    public function getHorse(): Horse
    {
        return $this->Horse;
    }
}
