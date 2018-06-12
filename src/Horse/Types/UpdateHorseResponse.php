<?php

namespace FEIWebServicesClient\Horse\Types;


use Phpro\SoapClient\Type\ResultInterface;

class UpdateHorseResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $updateHorseResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\Horse
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
    public function isUpdateHorseResult() : bool
    {
        return $this->updateHorseResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\Horse
     */
    public function getHorse() : \FEIWebServicesClient\Horse\Types\Horse
    {
        return $this->Horse;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages() : \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfHorseDuplicate
     */
    public function getPotentialHorseDuplicates() : \FEIWebServicesClient\Horse\Types\ArrayOfHorseDuplicate
    {
        return $this->PotentialHorseDuplicates;
    }

    /**
     * @return string
     */
    public function getTicket() : string
    {
        return $this->Ticket;
    }


}

