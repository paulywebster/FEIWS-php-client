<?php

namespace FEIWebServicesClient\Horse\Types;

class RegisterHorse
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var int
     */
    private $Year;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfString
     */
    private $DisciplineCodes;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->Year;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfString
     */
    public function getDisciplineCodes(): \FEIWebServicesClient\Horse\Types\ArrayOfString
    {
        return $this->DisciplineCodes;
    }
}
