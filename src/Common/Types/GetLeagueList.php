<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetLeagueList implements RequestInterface
{

    /**
     * @var string
     */
    private $DisciplineCode;

    /**
     * @var string
     */
    private $SeasonCode;

    /**
     * @return string
     */
    public function getDisciplineCode() : string
    {
        return $this->DisciplineCode;
    }

    /**
     * @return string
     */
    public function getSeasonCode() : string
    {
        return $this->SeasonCode;
    }


}

