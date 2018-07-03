<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ConfirmAddHorseResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $confirmAddHorseResult;

    /**
     * @var HorseNew
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
        if(!$this->confirmAddHorseResult && null !== $this->getMessages() && $this->getMessages()->valid()){
            if('ChipIDUniquenessViolation' === $this->getMessages()->current()->getUID()){
                throw new \InvalidArgumentException('The Microchip number must be unique.');
            }
            if('InvalidTicket' === $this->getMessages()->current()->getUID()){
                throw new \InvalidArgumentException('The ticket number given is invalid.');
            }
        }

        return $this->confirmAddHorseResult;
    }

    /**
     * @return HorseNew
     */
    public function getHorse(): HorseNew
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
