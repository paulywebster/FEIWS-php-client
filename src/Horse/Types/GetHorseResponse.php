<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseResponse implements ResultInterface
{
    /**
     * @var Horse
     */
    private $getHorseResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return Horse
     *
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public function result(): Horse
    {
        if (!$this->getHorseResult) {
            if ('InvalidHorseFEICode' === $this->getMessages()->current()->getUID()) {
                throw new \InvalidArgumentException('The Horse FEI Code is not used');
            }

            throw new \Exception(sprintf('Unhandled error code %s', $this->getMessages()->current()->getUID()));
        }

        return $this->getHorseResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
