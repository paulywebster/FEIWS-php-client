<?php

namespace FEIWebServicesClient\Horse\Types;

class SearchCriteria
{

    /**
     * @var string
     */
    private $Field = null;

    /**
     * @var string
     */
    private $Value = null;

    /**
     * @return string
     */
    public function getField() : string
    {
        return $this->Field;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->Value;
    }


}

