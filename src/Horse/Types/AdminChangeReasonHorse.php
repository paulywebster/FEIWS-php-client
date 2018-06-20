<?php

namespace FEIWebServicesClient\Horse\Types;

class AdminChangeReasonHorse
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $StatusCode;

    /**
     * @var string
     */
    private $Label;

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
    public function getStatusCode(): string
    {
        return $this->StatusCode;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->Label;
    }
}
