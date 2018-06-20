<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class UpgradeHorsePassportResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $upgradeHorsePassportResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function isUpgradeHorsePassportResult(): bool
    {
        return $this->upgradeHorsePassportResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
