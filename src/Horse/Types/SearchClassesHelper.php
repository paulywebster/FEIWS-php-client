<?php

namespace FEIWebServicesClient\Horse\Types;

class SearchClassesHelper
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\SearchClasses
     */
    private $ClassStructure = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\SearchClasses
     */
    public function getClassStructure(): \FEIWebServicesClient\Horse\Types\SearchClasses
    {
        return $this->ClassStructure;
    }
}
