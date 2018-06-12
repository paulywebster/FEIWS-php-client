<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAddressNameListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfAddressName
     */
    private $getAddressNameListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfAddressName
     */
    public function getGetAddressNameListResult() : \FEIWebServicesClient\Common\Types\ArrayOfAddressName
    {
        return $this->getAddressNameListResult;
    }


}

