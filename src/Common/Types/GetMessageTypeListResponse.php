<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetMessageTypeListResponse implements ResultInterface
{
    /**
     * @var ArrayOfMessageType
     */
    private $getMessageTypeListResult;

    /**
     * @return ArrayOfMessageType
     */
    public function result(): ArrayOfMessageType
    {
        return $this->getMessageTypeListResult;
    }
}
