<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SearchHorseTrainersResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfHorseTrainer
     */
    private $searchHorseTrainersResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfHorseTrainer
     */
    public function getSearchHorseTrainersResult(): \FEIWebServicesClient\Horse\Types\ArrayOfHorseTrainer
    {
        return $this->searchHorseTrainersResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
