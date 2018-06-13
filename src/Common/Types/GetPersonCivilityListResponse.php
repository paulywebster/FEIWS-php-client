<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonCivilityListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfCivility
     */
    private $getPersonCivilityListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfCivility
     */
    public function getGetPersonCivilityListResult(): \FEIWebServicesClient\Common\Types\ArrayOfCivility
    {
        return $this->getPersonCivilityListResult;
    }
}
