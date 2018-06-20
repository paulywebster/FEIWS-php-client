<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonGenderListResponse implements ResultInterface
{
    /**
     * @var ArrayOfGender
     */
    private $getPersonGenderListResult;

    /**
     * @return ArrayOfGender
     */
    public function result(): ArrayOfGender
    {
        return $this->getPersonGenderListResult;
    }
}
