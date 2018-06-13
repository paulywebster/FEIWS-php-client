<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdminChangeStatusListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfAdminChangeStatusHorse
     */
    private $getAdminChangeStatusListResult = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfAdminChangeStatusHorse
     */
    public function getGetAdminChangeStatusListResult(): \FEIWebServicesClient\Horse\Types\ArrayOfAdminChangeStatusHorse
    {
        return $this->getAdminChangeStatusListResult;
    }
}
