<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseNameKindChangeListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfKindChange
     */
    private $getHorseNameKindChangeListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfKindChange
     */
    public function getGetHorseNameKindChangeListResult() : \FEIWebServicesClient\Common\Types\ArrayOfKindChange
    {
        return $this->getHorseNameKindChangeListResult;
    }


}

