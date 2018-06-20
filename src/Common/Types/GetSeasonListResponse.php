<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetSeasonListResponse implements ResultInterface
{
    /**
     * @var ArrayOfString
     */
    private $getSeasonListResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfString
     */
    public function result(): ArrayOfString
    {
        return $this->getSeasonListResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
