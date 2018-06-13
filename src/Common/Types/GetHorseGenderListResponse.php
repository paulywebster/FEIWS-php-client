<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseGenderListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfGender
     */
    private $getHorseGenderListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfGender
     */
    public function getGetHorseGenderListResult(): \FEIWebServicesClient\Common\Types\ArrayOfGender
    {
        return $this->getHorseGenderListResult;
    }
}
