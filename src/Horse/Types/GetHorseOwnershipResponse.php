<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseOwnershipResponse implements ResultInterface
{
    /**
     * @var HorseOwnership
     */
    private $getHorseOwnershipResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return HorseOwnership
     */
    public function result(): HorseOwnership
    {
        return $this->getHorseOwnershipResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
