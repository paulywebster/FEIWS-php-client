<?php

namespace FEIWebServicesClient\Horse\Types;

use FEIWebServicesClient\Horse\Exception\ListTruncatedException;
use Phpro\SoapClient\Type\ResultInterface;

class SearchForHorseResponse implements ResultInterface
{
    /**
     * @var ArrayOfHorse
     */
    private $searchForHorseResult;

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

        return $this->searchForHorseResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ? ArrayOfMessage
    {
        return $this->Messages;
    }
}
