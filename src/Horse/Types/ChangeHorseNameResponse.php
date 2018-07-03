<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ChangeHorseNameResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $changeHorseNameResult;

    /**
     * @var HorseName
     */
    private $HorseName;

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
        return $this->changeHorseNameResult;
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
