<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AssignHorseOwnerResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $assignHorseOwnerResult;

    /**
     * @var HorseOwner
     */
    private $Owner;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function result(): bool
    {
        return $this->assignHorseOwnerResult;
    }

    /**
     * @return HorseOwner
     */
    public function getOwner(): HorseOwner
    {
        return $this->Owner;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
