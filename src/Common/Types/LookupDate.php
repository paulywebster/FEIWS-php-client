<?php

namespace FEIWebServicesClient\Common\Types;

class LookupDate
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var \DateTime
     */
    private $DateModified;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->Name;
    }

    /**
     * @return \DateTime
     */
    public function getDateModified() : \DateTime
    {
        return $this->DateModified;
    }


}

