<?php

namespace FEIWebServicesClient\Horse\Types;

class SearchForHorseAlt
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfSearchCriteria
     */
    private $Conditions = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfSearchCriteria
     */
    public function getConditions(): \FEIWebServicesClient\Horse\Types\ArrayOfSearchCriteria
    {
        return $this->Conditions;
    }
}
