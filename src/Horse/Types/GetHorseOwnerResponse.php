<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseOwnerResponse implements ResultInterface
{
    /**
     * @var HorseOwner
     */
    private $getHorseOwnerResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return HorseOwner
     */
    public function result(): HorseOwner
    {
        return $this->getHorseOwnerResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
