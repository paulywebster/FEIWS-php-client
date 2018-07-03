<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class UploadHorseDiagram implements RequestInterface
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var base64Binary
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
     * @return base64Binary
     */
    public function getDocument(): base64Binary
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
