<?php

namespace FEIWebServicesClient\Horse\Types;

class Message
{

    /**
     * @var string
     */
    private $UID = null;

    /**
     * @var string
     */
    private $Detail = null;

    /**
     * @return string
     */
    public function getUID() : string
    {
        return $this->UID;
    }

    /**
     * @return string
     */
    public function getDetail() : string
    {
        return $this->Detail;
    }


}

