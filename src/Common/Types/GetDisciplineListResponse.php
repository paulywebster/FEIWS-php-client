<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetDisciplineListResponse implements ResultInterface
{
    /**
     * @var ArrayOfDiscipline
     */
    private $getDisciplineListResult;

    /**
     * @return ArrayOfDiscipline
     */
    public function result(): ArrayOfDiscipline
    {
        return $this->getDisciplineListResult;
    }
}
