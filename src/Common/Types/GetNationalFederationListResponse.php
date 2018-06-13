<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetNationalFederationListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfNationalFederation
     */
    private $getNationalFederationListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfNationalFederation
     */
    public function getGetNationalFederationListResult(): \FEIWebServicesClient\Common\Types\ArrayOfNationalFederation
    {
        return $this->getNationalFederationListResult;
    }
}
