<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorseName
{
    /**
     * @var string
     */
    private $Name = null;

    /**
     * @var bool
     */
    private $Unconstrained = null;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return bool
     */
    public function isUnconstrained(): bool
    {
        return $this->Unconstrained;
    }
}
