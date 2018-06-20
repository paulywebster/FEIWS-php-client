<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetCountryListResponse implements ResultInterface
{
    /**
     * @var ArrayOfCountry
     */
    private $getCountryListResult;

    /**
     * @return ArrayOfCountry
     */
    public function result(): ArrayOfCountry
    {
        return $this->getCountryListResult;
    }
}
