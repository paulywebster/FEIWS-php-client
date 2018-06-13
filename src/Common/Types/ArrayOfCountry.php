<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfCountry
{
    /**
     * @var \FEIWebServicesClient\Common\Types\Country
     */
    private $Country;

    /**
     * @return \FEIWebServicesClient\Common\Types\Country
     */
    public function getCountry(): \FEIWebServicesClient\Common\Types\Country
    {
        return $this->Country;
    }
}
