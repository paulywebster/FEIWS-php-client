<?php

namespace FEIWebServicesClient\Horse\Types;


use Phpro\SoapClient\Type\ResultInterface;

class ConfirmAddHorseResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $confirmAddHorseResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseNew
     */
    private $Horse = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return bool
     */
    public function isConfirmAddHorseResult() : bool
    {
        return $this->confirmAddHorseResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseNew
     */
    public function getHorse() : \FEIWebServicesClient\Horse\Types\HorseNew
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

