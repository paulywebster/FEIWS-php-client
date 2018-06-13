<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfCivility
{
    /**
     * @var \FEIWebServicesClient\Common\Types\Civility
     */
    private $Civility;

    /**
     * @return \FEIWebServicesClient\Common\Types\Civility
     */
    public function getCivility(): \FEIWebServicesClient\Common\Types\Civility
    {
        return $this->Civility;
    }
}
