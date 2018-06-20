<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseGenderListResponse implements ResultInterface
{
    /**
     * @var ArrayOfGender
     */
    private $getHorseGenderListResult;

    /**
     * @return ArrayOfGender
     */
    public function result(): ArrayOfGender
    {
        return $this->getHorseGenderListResult;
    }
}
