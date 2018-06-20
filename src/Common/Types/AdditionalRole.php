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
     * @var ArrayOfString
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
     * @return ArrayOfString
     */
    public function getDisciplineCodes(): ArrayOfString
    {
        return $this->DisciplineCodes;
    }
}
