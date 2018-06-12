<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfOfficialStatus
{

    /**
     * @var \FEIWebServicesClient\Common\Types\OfficialStatus
     */
    private $OfficialStatus;

    /**
     * @return \FEIWebServicesClient\Common\Types\OfficialStatus
     */
    public function getOfficialStatus() : \FEIWebServicesClient\Common\Types\OfficialStatus
    {
        return $this->OfficialStatus;
    }


}

