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

    public function __construct(Country $country)
    {
        $nationalFederation = $this->getNationalFederationByCountryCode($country->getCode());

        $this->CountryCode = $nationalFederation['CountryCode'];
        $this->Name = $nationalFederation['Name'];
        $this->IsHorseAdminChangeAutoAccepted = $nationalFederation['IsHorseAdminChangeAutoAccepted'];
        $this->IsRiderAdminChangeAutoAccepted = $nationalFederation['IsRiderAdminChangeAutoAccepted'];
    }

    private function getNationalFederationByCountryCode($countryCode): array
    {
        $nationalFederationList = require __DIR__.'/../Ressources/NationalFederationList.php';

        foreach ($nationalFederationList as $nationalFederation) {
            if ($countryCode === $nationalFederation['CountryCode']) {
                return $nationalFederation;
            }
        }

        throw new \InvalidArgumentException('Cannot defined the national federation.');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ? string
    {
        return $this->CountryCode;
    }

    /**
     * @return bool
     */
    public function isHorseAdminChangeAutoAccepted(): bool
    {
        return $this->IsHorseAdminChangeAutoAccepted;
    }

    /**
     * @return bool
     */
    public function isRiderAdminChangeAutoAccepted(): bool
    {
        return $this->IsRiderAdminChangeAutoAccepted;
    }

    public function __toString(): string
    {
        return (string) $this->CountryCode;
    }
}
