<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfMessageType
{

    /**
     * @var \FEIWebServicesClient\Common\Types\MessageType
     */
    private $MessageType;

    /**
     * @return \FEIWebServicesClient\Common\Types\MessageType
     */
    public function getMessageType() : \FEIWebServicesClient\Common\Types\MessageType
    {
        return $this->MessageType;
    }


}

