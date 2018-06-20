<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SearchForHorseAltResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfHorse
     */
    private $searchForHorseAltResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfHorse
     */
    public function getSearchForHorseAltResult(): \FEIWebServicesClient\Horse\Types\ArrayOfHorse
    {
        return $this->searchForHorseAltResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
