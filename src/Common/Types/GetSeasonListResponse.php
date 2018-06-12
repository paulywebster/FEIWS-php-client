<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetSeasonListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfString
     */
    private $getSeasonListResult;

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfString
     */
    public function getGetSeasonListResult() : \FEIWebServicesClient\Common\Types\ArrayOfString
    {
        return $this->getSeasonListResult;
    }

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfMessage
     */
    public function getMessages() : \FEIWebServicesClient\Common\Types\ArrayOfMessage
    {
        return $this->Messages;
    }


}

