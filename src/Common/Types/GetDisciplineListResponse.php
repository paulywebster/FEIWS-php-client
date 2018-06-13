<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetDisciplineListResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Common\Types\ArrayOfDiscipline
     */
    private $getDisciplineListResult;

    /**
     * @return \FEIWebServicesClient\Common\Types\ArrayOfDiscipline
     */
    public function getGetDisciplineListResult(): \FEIWebServicesClient\Common\Types\ArrayOfDiscipline
    {
        return $this->getDisciplineListResult;
    }
}
