<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfAddressName
{
    /**
     * @var \FEIWebServicesClient\Common\Types\AddressName
     */
    private $AddressName;

    /**
     * @return \FEIWebServicesClient\Common\Types\AddressName
     */
    public function getAddressName(): \FEIWebServicesClient\Common\Types\AddressName
    {
        return $this->AddressName;
    }
}
