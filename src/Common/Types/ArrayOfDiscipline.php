<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfDiscipline
{

    /**
     * @var \FEIWebServicesClient\Common\Types\Discipline
     */
    private $Discipline;

    /**
     * @return \FEIWebServicesClient\Common\Types\Discipline
     */
    public function getDiscipline() : \FEIWebServicesClient\Common\Types\Discipline
    {
        return $this->Discipline;
    }


}

