<?php

namespace FEIWebServicesClient\Horse\Types;

class UploadHorseDocument
{
    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\base64Binary
     */
    private $Document = null;

    /**
     * @var string
     */
    private $DocumentGenderCode = null;

    /**
     * @var string
     */
    private $HorseIdentityTypeCode = null;

    /**
     * @var string
     */
    private $Extension = null;

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
    public function getDocumentGenderCode(): string
    {
        return $this->DocumentGenderCode;
    }

    /**
     * @return string
     */
    public function getHorseIdentityTypeCode(): string
    {
        return $this->HorseIdentityTypeCode;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->Extension;
    }
}
