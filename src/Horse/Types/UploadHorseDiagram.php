<?php

namespace FEIWebServicesClient\Horse\Types;

class UploadHorseDiagram
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var \FEIWebServicesClient\Horse\Types\base64Binary
     */
    private $Document;

    /**
     * @var string
     */
    private $Extension;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\base64Binary
     */
    public function getDocument(): \FEIWebServicesClient\Horse\Types\base64Binary
    {
        return $this->Document;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->Extension;
    }
}
