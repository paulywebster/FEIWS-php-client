<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfMessage
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\Message
     */
    private $Message;

    /**
     * @return \FEIWebServicesClient\Horse\Types\Message
     */
    public function getMessage(): \FEIWebServicesClient\Horse\Types\Message
    {
        return $this->Message;
    }
}
