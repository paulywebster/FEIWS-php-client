<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseNameHistoryListResponse implements ResultInterface
{
    /**
     * @var ArrayOfHorseName
     */
    private $getHorseNameHistoryListResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfHorseName
     */
    public function result(): ArrayOfHorseName
    {
        return $this->getHorseNameHistoryListResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
