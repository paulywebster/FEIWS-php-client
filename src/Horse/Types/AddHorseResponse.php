<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AddHorseResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $addHorseResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseNew
     */
    private $Horse = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfHorseDuplicate
     */
    private $PotentialHorseDuplicates = null;

    /**
     * @var string
     */
    private $Ticket = null;

    /**
     * @return bool
     */
    public function isAddHorseResult(): bool
    {
        return $this->addHorseResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseNew
     */
    public function getHorse(): \FEIWebServicesClient\Horse\Types\HorseNew
    {
        return $this->Horse;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfHorseDuplicate
     */
    public function getPotentialHorseDuplicates(): \FEIWebServicesClient\Horse\Types\ArrayOfHorseDuplicate
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
