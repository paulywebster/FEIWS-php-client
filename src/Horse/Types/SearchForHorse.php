<?php

namespace FEIWebServicesClient\Horse\Types;

class SearchForHorse
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfSCBase
     */
    private $Conditions = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfSCBase
     */
    public function getConditions(): \FEIWebServicesClient\Horse\Types\ArrayOfSCBase
    {
        return $this->Conditions;
    }
}
