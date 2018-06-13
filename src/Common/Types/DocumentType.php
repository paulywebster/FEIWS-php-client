<?php

namespace FEIWebServicesClient\Common\Types;

class DocumentType
{
    /**
     * @var string
     */
    private $Extension;

    /**
     * @var string
     */
    private $Label;

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->Extension;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->Label;
    }
}
