<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AddHorseNoviceQualificationResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $addHorseNoviceQualificationResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return bool
     */
    public function isAddHorseNoviceQualificationResult(): bool
    {
        return $this->addHorseNoviceQualificationResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
