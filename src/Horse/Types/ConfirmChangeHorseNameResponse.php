<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ConfirmChangeHorseNameResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $confirmChangeHorseNameResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseName
     */
    private $HorseName;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function isConfirmChangeHorseNameResult(): bool
    {
        return $this->confirmChangeHorseNameResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseName
     */
    public function getHorseName(): \FEIWebServicesClient\Horse\Types\HorseName
    {
        return $this->HorseName;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
