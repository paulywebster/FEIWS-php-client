<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseRegistrationListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfHorseRegistration
     */
    private $getHorseRegistrationListResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfHorseRegistration
     */
    public function getGetHorseRegistrationListResult(): \FEIWebServicesClient\Horse\Types\ArrayOfHorseRegistration
    {
        return $this->getHorseRegistrationListResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
