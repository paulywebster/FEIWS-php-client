<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfDocIssuingBody
{

    /**
     * @var \FEIWebServicesClient\Common\Types\DocIssuingBody
     */
    private $DocIssuingBody;

    /**
     * @return \FEIWebServicesClient\Common\Types\DocIssuingBody
     */
    public function getDocIssuingBody() : \FEIWebServicesClient\Common\Types\DocIssuingBody
    {
        return $this->DocIssuingBody;
    }


}

