<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOfficialStatusListResponse implements ResultInterface
{
    /**
     * @var ArrayOfOfficialStatus
     */
    private $getOfficialStatusListResult;

    /**
     * @return ArrayOfOfficialStatus
     */
    public function result(): ArrayOfOfficialStatus
    {
        return $this->getOfficialStatusListResult;
    }
}
