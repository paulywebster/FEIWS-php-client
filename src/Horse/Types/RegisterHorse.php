<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class RegisterHorse implements RequestInterface
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
     * @var ArrayOfString
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
     * @return ArrayOfString
     */
    public function getDisciplineCodes(): ArrayOfString
    {
        return $this->DisciplineCodes;
    }
}
