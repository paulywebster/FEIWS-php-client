<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AssignHorseOwnershipResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $assignHorseOwnershipResult;

    /**
     * @var HorseOwnership
     */
    private $Ownership;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function result(): bool
    {
        return $this->assignHorseOwnershipResult;
    }

    /**
     * @return HorseOwnership
     */
    public function getOwnership(): HorseOwnership
    {
        return $this->Ownership;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
