<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfOfficialFunction
{

    /**
     * @var \FEIWebServicesClient\Common\Types\OfficialFunction
     */
    private $OfficialFunction;

    /**
     * @return \FEIWebServicesClient\Common\Types\OfficialFunction
     */
    public function getOfficialFunction() : \FEIWebServicesClient\Common\Types\OfficialFunction
    {
        return $this->OfficialFunction;
    }


}

