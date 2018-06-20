<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetLookupDateListResponse implements ResultInterface
{
    /**
     * @var ArrayOfLookupDate
     */
    private $getLookupDateListResult;

    /**
     * @return ArrayOfLookupDate
     */
    public function result(): ArrayOfLookupDate
    {
        return $this->getLookupDateListResult;
    }
}
