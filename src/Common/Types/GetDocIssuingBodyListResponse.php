<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocIssuingBodyListResponse implements ResultInterface
{
    /**
     * @var ArrayOfDocIssuingBody
     */
    private $getDocIssuingBodyListResult;

    /**
     * @return ArrayOfDocIssuingBody
     */
    public function result(): ArrayOfDocIssuingBody
    {
        return $this->getDocIssuingBodyListResult;
    }
}
