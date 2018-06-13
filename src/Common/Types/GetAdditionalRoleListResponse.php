<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdditionalRoleListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfAdditionalRole
     */
    private $getAdditionalRoleListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfAdditionalRole
     */
    public function getGetAdditionalRoleListResult(): \FEIWebServicesClient\Common\Types\ArrayOfAdditionalRole
    {
        return $this->getAdditionalRoleListResult;
    }
}
