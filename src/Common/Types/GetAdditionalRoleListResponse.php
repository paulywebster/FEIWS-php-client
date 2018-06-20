<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdditionalRoleListResponse implements ResultInterface
{
    /**
     * @var ArrayOfAdditionalRole
     */
    private $getAdditionalRoleListResult;

    /**
     * @return ArrayOfAdditionalRole
     */
    public function result(): ArrayOfAdditionalRole
    {
        return $this->getAdditionalRoleListResult;
    }
}
