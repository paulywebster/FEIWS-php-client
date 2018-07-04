<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AddHorse implements RequestInterface
{
    /**
     * @var HorseNew
     */
    private $Horse;

    public function __construct(array $horse)
    {
        $this->Horse = (new HorseNew($horse))->data();
    }

    /**
     * @return HorseNew
     */
    public function getHorse(): HorseNew
    {
        return $this->Horse;
    }
}
