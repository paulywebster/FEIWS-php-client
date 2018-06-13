<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetMessageTypeListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfMessageType
     */
    private $getMessageTypeListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfMessageType
     */
    public function getGetMessageTypeListResult(): \FEIWebServicesClient\Common\Types\ArrayOfMessageType
    {
        return $this->getMessageTypeListResult;
    }
}
