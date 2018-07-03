<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdminChangeStatusListResponse implements ResultInterface
{
    /**
     * @var ArrayOfAdminChangeStatusHorse
     */
    private $getAdminChangeStatusListResult;

    /**
     * @return ArrayOfAdminChangeStatusHorse
     */
    public function result(): ArrayOfAdminChangeStatusHorse
    {
        return $this->getAdminChangeStatusListResult;
    }
}
