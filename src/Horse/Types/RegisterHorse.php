<?php

namespace FEIWebServicesClient\Horse\Types;

class RegisterHorse
{

    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @var int
     */
    private $Year = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfString
     */
    private $DisciplineCodes = null;

    /**
     * @return string
     */
    public function getHorseFEICode() : string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return int
     */
    public function getYear() : int
    {
        return $this->Year;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfString
     */
    public function getDisciplineCodes() : \FEIWebServicesClient\Horse\Types\ArrayOfString
    {
        return $this->DisciplineCodes;
    }


}

