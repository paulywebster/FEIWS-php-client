<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentTypeListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfDocumentType
     */
    private $getDocumentTypeListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfDocumentType
     */
    public function getGetDocumentTypeListResult(): \FEIWebServicesClient\Common\Types\ArrayOfDocumentType
    {
        return $this->getDocumentTypeListResult;
    }
}
