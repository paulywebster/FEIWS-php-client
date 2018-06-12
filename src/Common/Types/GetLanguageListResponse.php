<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetLanguageListResponse implements ResultInterface
{

    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfLanguage
     */
    private $getLanguageListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfLanguage
     */
    public function getGetLanguageListResult() : \FEIWebServicesClient\Common\Types\ArrayOfLanguage
    {
        return $this->getLanguageListResult;
    }


}

