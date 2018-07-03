<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ConfirmChangeHorseNameResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $confirmChangeHorseNameResult;

    /**
     * @var HorseName
     */
    private $HorseName;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function result(): bool
    {
        return $this->confirmChangeHorseNameResult;
    }

    /**
     * @return HorseName
     */
    public function getHorseName(): HorseName
    {
        return $this->HorseName;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
