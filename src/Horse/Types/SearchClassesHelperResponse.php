<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SearchClassesHelperResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $SearchClassesHelperResult;

    /**
     * @return string
     */
    public function result(): string
    {
        return $this->SearchClassesHelperResult;
    }
}
