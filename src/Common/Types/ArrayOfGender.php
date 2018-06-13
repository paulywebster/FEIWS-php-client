<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfGender
{
    /**
     * @var \FEIWebServicesClient\Common\Types\Gender
     */
    private $Gender;

    /**
     * @return \FEIWebServicesClient\Common\Types\Gender
     */
    public function getGender(): \FEIWebServicesClient\Common\Types\Gender
    {
        return $this->Gender;
    }
}
