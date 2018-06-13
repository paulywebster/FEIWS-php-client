<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOfficialStatusListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfOfficialStatus
     */
    private $getOfficialStatusListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfOfficialStatus
     */
    public function getGetOfficialStatusListResult(): \FEIWebServicesClient\Common\Types\ArrayOfOfficialStatus
    {
        return $this->getOfficialStatusListResult;
    }
}
