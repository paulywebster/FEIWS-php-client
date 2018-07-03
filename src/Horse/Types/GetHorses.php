<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetHorses implements RequestInterface
{
    /**
     * @var ArrayOfString
     */
    private $HorseFEICodes;

    /**
     * @var array
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(array $HorseFEICodes)
    {
        foreach ($HorseFEICodes as $code) {
            $this->HorseFEICodes[] = new HorseFEICode($code);
        }
    }

    /**
     * @return ArrayOfString
     */
    public function getHorseFEICodes(): ArrayOfString
    {
        return $this->HorseFEICodes;
    }
}
