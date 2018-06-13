<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetCountryListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfCountry
     */
    private $getCountryListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfCountry
     */
    public function getGetCountryListResult(): \FEIWebServicesClient\Common\Types\ArrayOfCountry
    {
        return $this->getCountryListResult;
    }
}
