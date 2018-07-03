<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHorseColorListResponse implements ResultInterface
{
    /**
     * @var ArrayOfHorseColor
     */
    private $getHorseColorListResult;

    /**
     * @return ArrayOfHorseColor
     */
    public function result(): ArrayOfHorseColor
    {
        return $this->getHorseColorListResult;
    }
}
