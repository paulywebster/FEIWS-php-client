<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetLookupDateListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfLookupDate
     */
    private $getLookupDateListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfLookupDate
     */
    public function getGetLookupDateListResult() : \FEIWebServicesClient\Common\Types\ArrayOfLookupDate
    {
        return $this->getLookupDateListResult;
    }


}

