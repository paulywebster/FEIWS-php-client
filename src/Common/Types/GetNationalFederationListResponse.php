<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetNationalFederationListResponse implements ResultInterface
{
    /**
     * @var ArrayOfNationalFederation
     */
    private $getNationalFederationListResult;

    /**
     * @return ArrayOfNationalFederation
     */
    public function result(): ArrayOfNationalFederation
    {
        return $this->getNationalFederationListResult;
    }
}
