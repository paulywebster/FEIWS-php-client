<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseNameKindChangeListResponse implements ResultInterface
{
    /**
     * @var ArrayOfKindChange
     */
    private $getHorseNameKindChangeListResult;

    /**
     * @return ArrayOfKindChange
     */
    public function result(): ArrayOfKindChange
    {
        return $this->getHorseNameKindChangeListResult;
    }
}
