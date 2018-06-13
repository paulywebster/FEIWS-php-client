<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfLookupDate
{
    /**
     * @var \FEIWebServicesClient\Common\Types\LookupDate
     */
    private $LookupDate;

    /**
     * @return \FEIWebServicesClient\Common\Types\LookupDate
     */
    public function getLookupDate(): \FEIWebServicesClient\Common\Types\LookupDate
    {
        return $this->LookupDate;
    }
}
