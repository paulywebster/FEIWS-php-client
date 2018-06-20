<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseCurrentNoviceQualificationResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
     */
    private $getHorseCurrentNoviceQualificationResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
     */
    public function getGetHorseCurrentNoviceQualificationResult(): \FEIWebServicesClient\Horse\Types\ArrayOfEnduranceNationalResult
    {
        return $this->getHorseCurrentNoviceQualificationResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
