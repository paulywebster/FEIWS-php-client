<?php

namespace FEIWebServicesClient\Common\Types;

class AdditionalRole
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
     * @var \FEIWebServicesClient\Common\Types\ArrayOfString
     */
    private $DisciplineCodes;

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
     * @return \FEIWebServicesClient\Common\Types\ArrayOfString
     */
    public function getDisciplineCodes(): \FEIWebServicesClient\Common\Types\ArrayOfString
    {
        return $this->DisciplineCodes;
    }
}
