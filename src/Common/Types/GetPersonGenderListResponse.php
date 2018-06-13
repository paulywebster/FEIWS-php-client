<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonGenderListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfGender
     */
    private $getPersonGenderListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfGender
     */
    public function getGetPersonGenderListResult(): \FEIWebServicesClient\Common\Types\ArrayOfGender
    {
        return $this->getPersonGenderListResult;
    }
}
