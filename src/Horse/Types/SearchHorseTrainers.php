<?php

namespace FEIWebServicesClient\Horse\Types;

class SearchHorseTrainers
{
    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @var int
     */
    private $PersonFEIID = null;

    /**
     * @var \DateTime
     */
    private $EvalDate = null;

    /**
     * @var int
     */
    private $PageNumber = null;

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
