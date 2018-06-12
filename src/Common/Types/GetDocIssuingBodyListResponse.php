<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocIssuingBodyListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfDocIssuingBody
     */
    private $getDocIssuingBodyListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfDocIssuingBody
     */
    public function getGetDocIssuingBodyListResult() : \FEIWebServicesClient\Common\Types\ArrayOfDocIssuingBody
    {
        return $this->getDocIssuingBodyListResult;
    }


}

