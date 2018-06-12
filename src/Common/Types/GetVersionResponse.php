<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetVersionResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $getVersionResult;

    /**
     * @return string
     */
    public function getVersionResult() : string
    {
        return $this->getVersionResult;
    }


}

