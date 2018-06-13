<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AssignHorseOwnershipResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $assignHorseOwnershipResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    private $Ownership = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return bool
     */
    public function isAssignHorseOwnershipResult(): bool
    {
        return $this->assignHorseOwnershipResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\HorseOwnership
     */
    public function getOwnership(): \FEIWebServicesClient\Horse\Types\HorseOwnership
    {
        return $this->Ownership;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
