<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetLeagueListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfLeague
     */
    private $getLeagueListResult;

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfLeague
     */
    public function getGetLeagueListResult() : \FEIWebServicesClient\Common\Types\ArrayOfLeague
    {
        return $this->getLeagueListResult;
    }

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfMessage
     */
    public function getMessages() : \FEIWebServicesClient\Common\Types\ArrayOfMessage
    {
        return $this->Messages;
    }


}

