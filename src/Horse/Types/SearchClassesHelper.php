<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SearchClassesHelper implements RequestInterface
{
    /**
     * @var SearchClasses
     */
    private $ClassStructure;

    /**
     * @return SearchClasses
     */
    public function getClassStructure(): SearchClasses
    {
        return $this->ClassStructure;
    }
}
