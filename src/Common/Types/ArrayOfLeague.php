<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfLeague
{
    /**
     * @var \FEIWebServicesClient\Common\Types\League
     */
    private $League;

    /**
     * @return \FEIWebServicesClient\Common\Types\League
     */
    public function getLeague(): \FEIWebServicesClient\Common\Types\League
    {
        return $this->League;
    }
}
