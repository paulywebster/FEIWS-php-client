<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SearchHorseTrainersResponse implements ResultInterface
{
    /**
     * @var ArrayOfHorseTrainer
     */
    private $searchHorseTrainersResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfHorseTrainer
     */
    public function result(): ArrayOfHorseTrainer
    {
        return $this->searchHorseTrainersResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
