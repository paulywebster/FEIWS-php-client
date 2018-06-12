<?php

namespace FEIWebServicesClient\Horse\Types;


use Phpro\SoapClient\Type\ResultInterface;

class AddTrainerToHorseResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $addTrainerToHorseResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return bool
     */
    public function isAddTrainerToHorseResult() : bool
    {
        return $this->addTrainerToHorseResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages() : \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }


}

