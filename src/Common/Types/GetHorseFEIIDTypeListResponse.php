<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseFEIIDTypeListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfFEIIDType
     */
    private $getHorseFEIIDTypeListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfFEIIDType
     */
    public function getGetHorseFEIIDTypeListResult(): \FEIWebServicesClient\Common\Types\ArrayOfFEIIDType
    {
        return $this->getHorseFEIIDTypeListResult;
    }
}
