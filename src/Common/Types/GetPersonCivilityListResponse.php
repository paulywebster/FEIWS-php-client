<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonCivilityListResponse implements ResultInterface
{
    /**
     * @var ArrayOfCivility
     */
    private $getPersonCivilityListResult;

    /**
     * @return ArrayOfCivility
     */
    public function result(): ArrayOfCivility
    {
        return $this->getPersonCivilityListResult;
    }
}
