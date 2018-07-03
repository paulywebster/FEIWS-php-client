<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class RegisterHorseResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $registerHorseResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function result(): bool
    {
        return $this->registerHorseResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
