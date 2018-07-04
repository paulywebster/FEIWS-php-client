<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SearchForHorseAlt implements RequestInterface
{
    /**
     * @var ArrayOfSearchCriteria
     */
    private $Conditions;

    public function __construct(array $Conditions)
    {
        foreach ($Conditions as $field => $value) {
            $this->Conditions[] = new SearchCriteria($field, $value);
        }

        if (!array_key_exists('Registration', $Conditions) && (bool) array_intersect(['RegYear', 'RegDiscipline', 'RegDateFrom', 'RegDateTo'], array_keys($Conditions))) {
            throw new \InvalidArgumentException('You must specify if you search a registered or a non-registered horses with the "Registration" condition when you use the registrations conditions as "RegYear","RegDiscipline","RegDateFrom","RegDateTo"');
        }
    }

    /**
     * @return ArrayOfSearchCriteria
     */
    public function getConditions(): ArrayOfSearchCriteria
    {
        return $this->Conditions;
    }
}
