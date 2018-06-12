<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOfficialFunctionListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfOfficialFunction
     */
    private $getOfficialFunctionListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfOfficialFunction
     */
    public function getGetOfficialFunctionListResult() : \FEIWebServicesClient\Common\Types\ArrayOfOfficialFunction
    {
        return $this->getOfficialFunctionListResult;
    }


}

