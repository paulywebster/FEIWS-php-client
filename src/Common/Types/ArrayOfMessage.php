<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfMessage
{
    /**
     * @var \FEIWebServicesClient\Common\Types\Message
     */
    private $Message;

    /**
     * @return \FEIWebServicesClient\Common\Types\Message
     */
    public function getMessage(): \FEIWebServicesClient\Common\Types\Message
    {
        return $this->Message;
    }
}
