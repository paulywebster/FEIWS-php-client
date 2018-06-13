<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseColor
{
    /**
     * @var string
     */
    private $Code = null;

    /**
     * @var string
     */
    private $Label = null;

    /**
     * @var bool
     */
    private $ReqColorComplement = null;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->Label;
    }

    /**
     * @return bool
     */
    public function isReqColorComplement(): bool
    {
        return $this->ReqColorComplement;
    }
}
