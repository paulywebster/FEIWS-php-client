<?php

namespace FEIWebServicesClient\Horse\Types;


use Phpro\SoapClient\Type\ResultInterface;

class ConfirmUpdateHorseResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $confirmUpdateHorseResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\Horse
     */
    private $Horse = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return bool
     */
    public function isConfirmUpdateHorseResult() : bool
    {
        return $this->confirmUpdateHorseResult;
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


}

