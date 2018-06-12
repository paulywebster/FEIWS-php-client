<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetCategoryListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfCategory
     */
    private $getCategoryListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfCategory
     */
    public function getGetCategoryListResult() : \FEIWebServicesClient\Common\Types\ArrayOfCategory
    {
        return $this->getCategoryListResult;
    }


}

