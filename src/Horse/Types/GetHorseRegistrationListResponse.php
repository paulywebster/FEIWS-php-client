<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseRegistrationListResponse implements ResultInterface
{
    /**
     * @var ArrayOfHorseRegistration
     */
    private $getHorseRegistrationListResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfHorseRegistration
     */
    public function result(): ArrayOfHorseRegistration
    {
        return $this->getHorseRegistrationListResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
