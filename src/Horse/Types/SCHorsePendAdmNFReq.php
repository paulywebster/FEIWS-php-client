<?php

namespace FEIWebServicesClient\Horse\Types;

class SCHorsePendAdmNFReq
{
    /**
     * @var bool
     */
    private $Value = null;

    /**
     * @return bool
     */
    public function isValue(): bool
    {
        return $this->Value;
    }
}
