<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfNationalFederation
{
    /**
     * @var \FEIWebServicesClient\Common\Types\NationalFederation
     */
    private $NationalFederation;

    /**
     * @return \FEIWebServicesClient\Common\Types\NationalFederation
     */
    public function getNationalFederation(): \FEIWebServicesClient\Common\Types\NationalFederation
    {
        return $this->NationalFederation;
    }
}
