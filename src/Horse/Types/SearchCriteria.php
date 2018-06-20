<?php

namespace FEIWebServicesClient\Horse\Types;

class SearchCriteria
{
    /**
     * @var string
     */
    private $Field;

    /**
     * @var string
     */
    private $Value;

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->Field;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
}
