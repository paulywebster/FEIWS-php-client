<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AssignHorseOwnerResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $assignHorseOwnerResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwner
     */
    private $Owner = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return bool
     */
    public function isAssignHorseOwnerResult(): bool
    {
        return $this->assignHorseOwnerResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseOwner
     */
    public function getOwner(): \FEIWebServicesClient\Horse\Types\HorseOwner
    {
        return $this->Owner;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
