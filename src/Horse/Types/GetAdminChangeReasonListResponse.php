<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdminChangeReasonListResponse implements ResultInterface
{
    /**
     * @var ArrayOfAdminChangeReasonHorse
     */
    private $getAdminChangeReasonListResult;

    /**
     * @return ArrayOfAdminChangeReasonHorse
     */
    public function result(): ArrayOfAdminChangeReasonHorse
    {
        return $this->getAdminChangeReasonListResult;
    }
}
