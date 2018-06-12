<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseDuplicate
{

    /**
     * @var \FEIWebServicesClient\Horse\Types\Horse
     */
    private $Duplicate = null;

    /**
     * @var string
     */
    private $RuleDescription = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\Horse
     */
    public function getDuplicate() : \FEIWebServicesClient\Horse\Types\Horse
    {
        return $this->Duplicate;
    }

    /**
     * @return string
     */
    public function getRuleDescription() : string
    {
        return $this->RuleDescription;
    }


}

