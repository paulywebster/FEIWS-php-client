<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdminChangeReasonListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfAdminChangeReasonHorse
     */
    private $getAdminChangeReasonListResult;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfAdminChangeReasonHorse
     */
    public function getGetAdminChangeReasonListResult(): \FEIWebServicesClient\Horse\Types\ArrayOfAdminChangeReasonHorse
    {
        return $this->getAdminChangeReasonListResult;
    }
}
