<?php

namespace FEIWebServicesClient\Horse\Types;

use FEIWebServicesClient\Horse\Exception\ListTruncatedException;
use Phpro\SoapClient\Type\ResultInterface;

class SearchForHorseAltResponse implements ResultInterface
{
    /**
     * @var ArrayOfHorse
     */
    private $searchForHorseAltResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfHorse
     */
    public function result(): ArrayOfHorse
    {
        if (null !== $this->getMessages() && $this->getMessages()->valid() && 'ListTruncated' === $this->getMessages()->current()->getUID()) {
            throw ListTruncatedException::raise();
        }

        return $this->searchForHorseAltResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ? ArrayOfMessage
    {
        return $this->Messages;
    }
}
