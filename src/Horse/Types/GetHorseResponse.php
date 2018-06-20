<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\Horse
     */
    private $getHorseResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return \FEIWebServicesClient\Horse\Types\Horse
     */
    public function getGetHorseResult(): \FEIWebServicesClient\Horse\Types\Horse
    {
        return $this->getHorseResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
