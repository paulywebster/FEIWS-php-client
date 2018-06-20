<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetLanguageListResponse implements ResultInterface
{
    /**
     * @var ArrayOfLanguage
     */
    private $getLanguageListResult;

    /**
     * @return ArrayOfLanguage
     */
    public function result(): ArrayOfLanguage
    {
        return $this->getLanguageListResult;
    }
}
