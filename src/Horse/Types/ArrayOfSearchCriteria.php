<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfSearchCriteria
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\SearchCriteria
     */
    private $SearchCriteria;

    /**
     * @return \FEIWebServicesClient\Horse\Types\SearchCriteria
     */
    public function getSearchCriteria(): \FEIWebServicesClient\Horse\Types\SearchCriteria
    {
        return $this->SearchCriteria;
    }
}
