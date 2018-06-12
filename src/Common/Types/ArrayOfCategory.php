<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfCategory
{

    /**
     * @var \FEIWebServicesClient\Common\Types\Category
     */
    private $Category;

    /**
     * @return \FEIWebServicesClient\Common\Types\Category
     */
    public function getCategory() : \FEIWebServicesClient\Common\Types\Category
    {
        return $this->Category;
    }


}

