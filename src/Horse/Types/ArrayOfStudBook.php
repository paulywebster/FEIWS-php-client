<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfStudBook
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\StudBook
     */
    private $StudBook;

    /**
     * @return \FEIWebServicesClient\Horse\Types\StudBook
     */
    public function getStudBook(): \FEIWebServicesClient\Horse\Types\StudBook
    {
        return $this->StudBook;
    }
}
