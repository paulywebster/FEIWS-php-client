<?php

namespace FEIWebServicesClient\Common\Types;

class Country
{
    /**
     * @var string
     */
    private $ISONumeric;

    /**
     * @var string
     */
    private $ISOAlpha;

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
    public function getISONumeric(): string
    {
        return $this->ISONumeric;
    }

    /**
     * @return string
     */
    public function getISOAlpha(): string
    {
        return $this->ISOAlpha;
    }

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
}
