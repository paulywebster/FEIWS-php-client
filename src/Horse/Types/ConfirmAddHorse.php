<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ConfirmAddHorse implements RequestInterface
{
    /**
     * @var string
     */
    private $Ticket;

    public function __construct(string $Ticket)
    {
        $this->Ticket = $Ticket;
    }

    /**
     * @return string
     */
    public function getTicket(): string
    {
        return $this->Ticket;
    }
}
