<?php

namespace FEIWebServicesClient\Authentication\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ModeResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $ModeResult;

    /**
     * @return string
     */
    public function getModeResult() : string
    {
        return $this->ModeResult;
    }
}

