<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseDuplicate
{
    /**
     * @var Horse
     */
    private $Duplicate;

    /**
     * @var string
     */
    private $RuleDescription;

    /**
     * @return Horse
     */
    public function getDuplicate(): Horse
    {
        return $this->Duplicate;
    }

    /**
     * @return string
     */
    public function getRuleDescription(): string
    {
        return $this->RuleDescription;
    }
}
