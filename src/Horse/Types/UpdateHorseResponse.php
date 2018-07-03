<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateHorseResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $updateHorseResult;

    /**
     * @var Horse
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
        return $this->updateHorseResult;
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
