<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfDocumentType
{

    /**
     * @var \FEIWebServicesClient\Common\Types\DocumentType
     */
    private $DocumentType;

    /**
     * @return \FEIWebServicesClient\Common\Types\DocumentType
     */
    public function getDocumentType() : \FEIWebServicesClient\Common\Types\DocumentType
    {
        return $this->DocumentType;
    }


}

