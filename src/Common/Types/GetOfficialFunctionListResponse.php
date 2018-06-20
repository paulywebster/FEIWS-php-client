<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOfficialFunctionListResponse implements ResultInterface
{
    /**
     * @var ArrayOfOfficialFunction
     */
    private $getOfficialFunctionListResult;

    /**
     * @return ArrayOfOfficialFunction
     */
    public function result(): ArrayOfOfficialFunction
    {
        return $this->getOfficialFunctionListResult;
    }
}
