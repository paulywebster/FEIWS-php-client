<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorsesResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfHorse
     */
    private $getHorsesResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfHorse
     */
    public function getGetHorsesResult(): \FEIWebServicesClient\Horse\Types\ArrayOfHorse
    {
        return $this->getHorsesResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
