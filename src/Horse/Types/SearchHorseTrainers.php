<?php

namespace FEIWebServicesClient\Horse\Types;

class SearchHorseTrainers
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var int
     */
    private $PersonFEIID;

    /**
     * @var \DateTime
     */
    private $EvalDate;

    /**
     * @var int
     */
    private $PageNumber;

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
    public function getPersonFEIID(): int
    {
        return $this->PersonFEIID;
    }

    /**
     * @return \DateTime
     */
    public function getEvalDate(): \DateTime
    {
        return $this->EvalDate;
    }

    /**
     * @return int
     */
    public function getPageNumber(): int
    {
        return $this->PageNumber;
    }
}
