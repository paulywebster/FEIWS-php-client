<?php

namespace FEIWebServicesClient\Common\Types;

class Message
{
    /**
     * @var string
     */
    private $UID;

    /**
     * @var string
     */
    private $Detail;

    /**
     * @return string
     */
    public function getUID(): string
    {
        return $this->UID;
    }

    /**
     * @return string
     */
    public function getDetail(): string
    {
        return $this->Detail;
    }
}
