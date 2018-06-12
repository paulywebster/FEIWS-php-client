<?php

namespace FEIWebServicesClient\Horse\Types;


use Phpro\SoapClient\Type\ResultInterface;

class GetHorseNameHistoryListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfHorseName
     */
    private $getHorseNameHistoryListResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfHorseName
     */
    public function getGetHorseNameHistoryListResult() : \FEIWebServicesClient\Horse\Types\ArrayOfHorseName
    {
        return $this->getHorseNameHistoryListResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages() : \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }


}

