<?php

namespace FEIWebServicesClient\Horse\Types;

use FEIWebServicesClient\Common\Types\Discipline;
use Phpro\SoapClient\Type\ResultInterface;

class RegisterHorseResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $registerHorseResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return bool
     */
    public function result(): bool
    {
        if (!$this->registerHorseResult && null !== $this->getMessages() && $this->getMessages()->valid()) {
            if ('HorseAlreadyRegistered' === $this->getMessages()->current()->getUID()) {
                throw new \InvalidArgumentException(sprintf('The horse is already registered in this discipline : %s', Discipline::fromString($this->getMessages()->current()->getDetail())->getLabel()));
            }
            if ('EnduranceTrainerRequired' === $this->getMessages()->current()->getUID()) {
                throw new \InvalidArgumentException(sprintf('An endurance registered trainer is missing for the year : %s', $this->getMessages()->current()->getDetail()));
            }
            if ('RegistrationTooEarly' === $this->getMessages()->current()->getUID()) {
                throw new \InvalidArgumentException('A registration may not be made more than a few weeks in advance.');
            }
        }

        return $this->registerHorseResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
