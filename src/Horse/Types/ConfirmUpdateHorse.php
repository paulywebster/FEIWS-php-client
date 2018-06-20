<?php

namespace FEIWebServicesClient\Horse\Types;

class ConfirmUpdateHorse
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
