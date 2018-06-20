<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class UpgradeHorseRecognitionCardResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $upgradeHorseRecognitionCardResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function isUpgradeHorseRecognitionCardResult(): bool
    {
        return $this->upgradeHorseRecognitionCardResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
