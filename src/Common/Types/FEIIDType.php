<?php

namespace FEIWebServicesClient\Common\Types;

class FEIIDType
{

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Label;

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->Code;
    }

    /**
     * @return string
     */
    public function getLabel() : string
    {
        return $this->Label;
    }


}

