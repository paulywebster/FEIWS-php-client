<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfKindChange
{
    /**
     * @var \FEIWebServicesClient\Common\Types\KindChange
     */
    private $KindChange;

    /**
     * @return \FEIWebServicesClient\Common\Types\KindChange
     */
    public function getKindChange(): \FEIWebServicesClient\Common\Types\KindChange
    {
        return $this->KindChange;
    }
}
