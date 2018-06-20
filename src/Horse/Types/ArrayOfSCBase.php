<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfSCBase
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\SCBase
     */
    private $SCBase;

    /**
     * @return \FEIWebServicesClient\Horse\Types\SCBase
     */
    public function getSCBase(): \FEIWebServicesClient\Horse\Types\SCBase
    {
        return $this->SCBase;
    }
}
