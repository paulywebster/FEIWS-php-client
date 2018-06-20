<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetLeagueListResponse implements ResultInterface
{
    /**
     * @var ArrayOfLeague
     */
    private $getLeagueListResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return ArrayOfLeague
     *
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public function result(): ArrayOfLeague
    {
        if (!$this->getLeagueListResult) {
            if ('InvalidSeasonCode' === $this->getMessages()->current()->getUID()) {
                throw new \InvalidArgumentException('The SeasonCode is not a valid one.');
            }

            throw new \Exception(sprintf('Unhandled error code %s', $this->getMessages()->current()->getUID()));
        }

        return $this->getLeagueListResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
