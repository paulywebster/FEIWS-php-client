<?php

namespace FEIWebServicesClient\Common\Types;

class NationalFederation
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @var bool
     */
    private $IsHorseAdminChangeAutoAccepted;

    /**
     * @var bool
     */
    private $IsRiderAdminChangeAutoAccepted;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->Name;
    }

    /**
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->CountryCode;
    }

    /**
     * @return bool
     */
    public function isIsHorseAdminChangeAutoAccepted() : bool
    {
        return $this->IsHorseAdminChangeAutoAccepted;
    }

    /**
     * @return bool
     */
    public function isIsRiderAdminChangeAutoAccepted() : bool
    {
        return $this->IsRiderAdminChangeAutoAccepted;
    }


}

