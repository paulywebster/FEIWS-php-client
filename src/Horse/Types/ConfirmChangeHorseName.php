<?php

namespace FEIWebServicesClient\Horse\Types;

class ConfirmChangeHorseName
{
    /**
     * @var string
     */
    private $Ticket;

    /**
     * @return string
     */
    public function getTicket(): string
    {
        return $this->Ticket;
    }
}
