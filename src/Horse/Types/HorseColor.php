<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseColor
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
     * @var bool
     */
    private $ReqColorComplement;

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
