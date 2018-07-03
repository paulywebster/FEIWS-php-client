<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorsesResponse implements ResultInterface
{
    /**
     * @var ArrayOfHorse
     */
    private $getHorsesResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfHorse
     */
    public function result(): ArrayOfHorse
    {
        return $this->getHorsesResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
