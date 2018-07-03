<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ConfirmChangeHorseName implements RequestInterface
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
