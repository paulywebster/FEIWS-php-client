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
     * @var \FEIWebServicesClient\Horse\Types\HorseName
     */
    private $HorseName;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfHorseDuplicate
     */
    private $PotentialHorseDuplicates;

    /**
     * @var string
     */
    private $Ticket;

    /**
     * @return bool
     */
    public function isChangeHorseNameResult(): bool
    {
        return $this->changeHorseNameResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseName
     */
    public function getHorseName(): \FEIWebServicesClient\Horse\Types\HorseName
    {
        return $this->HorseName;
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
