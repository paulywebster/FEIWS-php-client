<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseOwnerResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwner
     */
    private $getHorseOwnerResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseOwner
     */
    public function getGetHorseOwnerResult(): \FEIWebServicesClient\Horse\Types\HorseOwner
    {
        return $this->getHorseOwnerResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
