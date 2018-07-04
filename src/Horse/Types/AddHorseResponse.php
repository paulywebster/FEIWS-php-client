<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AddHorseResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $addHorseResult;

    /**
     * @var HorseNew
     */
    private $Horse;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @var ArrayOfHorseDuplicate
     */
    private $PotentialHorseDuplicates;

    /**
     * @var string
     */
    private $Ticket;

    /**
     * @return bool
     */
    public function result(): bool
    {
        return $this->addHorseResult;
    }

    /**
     * @return HorseNew
     */
    public function getHorse(): ? HorseNew
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

    /**
     * @return ArrayOfHorseDuplicate
     */
    public function getPotentialHorseDuplicates(): ArrayOfHorseDuplicate
    {
        return $this->PotentialHorseDuplicates;
    }

    /**
     * @return string
     */
    public function getTicket(): string
    {
        return $this->Ticket;
    }
}
