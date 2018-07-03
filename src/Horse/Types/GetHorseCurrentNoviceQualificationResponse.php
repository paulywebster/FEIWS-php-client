<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseCurrentNoviceQualificationResponse implements ResultInterface
{
    /**
     * @var ArrayOfEnduranceNationalResult
     */
    private $getHorseCurrentNoviceQualificationResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfEnduranceNationalResult
     */
    public function result(): ArrayOfEnduranceNationalResult
    {
        return $this->getHorseCurrentNoviceQualificationResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
