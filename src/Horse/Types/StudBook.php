<?php

namespace FEIWebServicesClient\Horse\Types;

class StudBook
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Name;

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
    public function getName(): string
    {
        return $this->Name;
    }
}
