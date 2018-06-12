<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetSeasonList implements RequestInterface
{

    /**
     * @var string
     */
    private $DisciplineCode;

    /**
     * @return string
     */
    public function getDisciplineCode() : string
    {
        return $this->DisciplineCode;
    }


}

