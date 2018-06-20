<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfString
{
    /**
     * @var string
     */
    private $string;

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }
}
