<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseTrainer
{

    /**
     * @var \DateTime
     */
    private $StartDate = null;

    /**
     * @var \DateTime
     */
    private $EndDate = null;

    /**
     * @var string
     */
    private $HorseFEICode = null;

    /**
     * @var string
     */
    private $CompleteName = null;

    /**
     * @var string
     */
    private $HorseAdminNF = null;

    /**
     * @var int
     */
    private $PersonFEIID = null;

    /**
     * @var string
     */
    private $FirstName = null;

    /**
     * @var string
     */
    private $FamilyName = null;

    /**
     * @var string
     */
    private $PersonAdminNF = null;

    /**
     * @var string
     */
    private $Comment = null;

    /**
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->StartDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->EndDate;
    }

    /**
     * @return string
     */
    public function getHorseFEICode() : string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return string
     */
    public function getCompleteName() : string
    {
        return $this->CompleteName;
    }

    /**
     * @return string
     */
    public function getHorseAdminNF() : string
    {
        return $this->HorseAdminNF;
    }

    /**
     * @return int
     */
    public function getPersonFEIID() : int
    {
        return $this->PersonFEIID;
    }

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->FirstName;
    }

    /**
     * @return string
     */
    public function getFamilyName() : string
    {
        return $this->FamilyName;
    }

    /**
     * @return string
     */
    public function getPersonAdminNF() : string
    {
        return $this->PersonAdminNF;
    }

    /**
     * @return string
     */
    public function getComment() : string
    {
        return $this->Comment;
    }


}

