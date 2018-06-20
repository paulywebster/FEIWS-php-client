<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetCategoryListResponse implements ResultInterface
{
    /**
     * @var ArrayOfCategory
     */
    private $getCategoryListResult;

    /**
     * @return ArrayOfCategory
     */
    public function result(): ArrayOfCategory
    {
        return $this->getCategoryListResult;
    }
}
