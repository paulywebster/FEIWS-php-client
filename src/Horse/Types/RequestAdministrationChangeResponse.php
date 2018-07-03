<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class RequestAdministrationChangeResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $requestAdministrationChangeResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return string
     */
    public function result(): string
    {
        return $this->requestAdministrationChangeResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
