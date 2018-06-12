<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfLanguage
{

    /**
     * @var \FEIWebServicesClient\Common\Types\Language
     */
    private $Language;

    /**
     * @return \FEIWebServicesClient\Common\Types\Language
     */
    public function getLanguage() : \FEIWebServicesClient\Common\Types\Language
    {
        return $this->Language;
    }


}

