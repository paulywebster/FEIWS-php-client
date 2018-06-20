<?php

namespace FEIWebServicesClient\Horse\Types;

class UploadHorseDocument
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
    private $DocumentGenderCode;

    /**
     * @var string
     */
    private $HorseIdentityTypeCode;

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
