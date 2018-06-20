<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentTypeListResponse implements ResultInterface
{
    /**
     * @var ArrayOfDocumentType
     */
    private $getDocumentTypeListResult;

    /**
     * @return ArrayOfDocumentType
     */
    public function result(): ArrayOfDocumentType
    {
        return $this->getDocumentTypeListResult;
    }
}
