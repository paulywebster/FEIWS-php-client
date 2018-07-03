<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ConfirmUpdateHorseResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $confirmUpdateHorseResult;

    /**
     * @var Horse
     */
    private $Horse;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function result(): bool
    {
        return $this->confirmUpdateHorseResult;
    }

    /**
     * @return Horse
     */
    public function getHorse(): Horse
    {
        return $this->Horse;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
