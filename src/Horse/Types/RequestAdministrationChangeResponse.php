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
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return string
     */
    public function getRequestAdministrationChangeResult(): string
    {
        return $this->requestAdministrationChangeResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
