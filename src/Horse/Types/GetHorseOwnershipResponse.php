<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseOwnershipResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    private $getHorseOwnershipResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    public function getGetHorseOwnershipResult(): \FEIWebServicesClient\Horse\Types\HorseOwnership
    {
        return $this->getHorseOwnershipResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
