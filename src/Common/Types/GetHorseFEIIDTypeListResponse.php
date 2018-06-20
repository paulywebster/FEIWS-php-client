<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseFEIIDTypeListResponse implements ResultInterface
{
    /**
     * @var ArrayOfFEIIDType
     */
    private $getHorseFEIIDTypeListResult;

    /**
     * @return ArrayOfFEIIDType
     */
    public function result(): ArrayOfFEIIDType
    {
        return $this->getHorseFEIIDTypeListResult;
    }
}
