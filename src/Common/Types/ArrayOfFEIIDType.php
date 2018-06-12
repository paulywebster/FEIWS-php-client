<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfFEIIDType
{

    /**
     * @var \FEIWebServicesClient\Common\Types\FEIIDType
     */
    private $FEIIDType;

    /**
     * @return \FEIWebServicesClient\Common\Types\FEIIDType
     */
    public function getFEIIDType() : \FEIWebServicesClient\Common\Types\FEIIDType
    {
        return $this->FEIIDType;
    }


}

