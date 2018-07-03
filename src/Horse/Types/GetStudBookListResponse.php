<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudBookListResponse implements ResultInterface
{
    /**
     * @var ArrayOfStudBook
     */
    private $getStudBookListResult;

    /**
     * @return ArrayOfStudBook
     */
    public function result(): ArrayOfStudBook
    {
        return $this->getStudBookListResult;
    }
}
