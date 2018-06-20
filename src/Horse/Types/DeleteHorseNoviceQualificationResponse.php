<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteHorseNoviceQualificationResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $deleteHorseNoviceQualificationResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function isDeleteHorseNoviceQualificationResult(): bool
    {
        return $this->deleteHorseNoviceQualificationResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
