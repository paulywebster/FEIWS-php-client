<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAddressNameListResponse implements ResultInterface
{
    /**
     * @var ArrayOfAddressName
     */
    private $getAddressNameListResult;

    /**
     * @return ArrayOfAddressName
     */
    public function result(): ArrayOfAddressName
    {
        return $this->getAddressNameListResult;
    }
}
