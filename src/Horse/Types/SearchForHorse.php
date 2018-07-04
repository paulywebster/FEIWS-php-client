<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SearchForHorse implements RequestInterface
{
    /**
     * @var ArrayOfSCBase
     */
    private $Conditions;

    public function __construct(array $Conditions)
    {
        foreach ($Conditions as $field => $value) {
            $this->Conditions['SCBase'][] = (new SCBase($field, $value))->getSearchParameter();
        }
    }

    /**
     * @return ArrayOfSCBase
     */
    public function getConditions(): ArrayOfSCBase
    {
        return $this->Conditions;
    }
}
