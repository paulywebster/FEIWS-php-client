<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudBookListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfStudBook
     */
    private $getStudBookListResult;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfStudBook
     */
    public function getGetStudBookListResult(): \FEIWebServicesClient\Horse\Types\ArrayOfStudBook
    {
        return $this->getStudBookListResult;
    }
}
