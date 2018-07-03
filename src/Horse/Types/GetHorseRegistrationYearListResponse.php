<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseRegistrationYearListResponse implements ResultInterface
{
    /**
     * @var ArrayOfHorseRegistration
     */
    private $getHorseRegistrationYearListResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfHorseRegistration
     */
    public function result(): ArrayOfHorseRegistration
    {
        return $this->getHorseRegistrationYearListResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
