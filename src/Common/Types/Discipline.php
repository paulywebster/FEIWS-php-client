<?php

namespace FEIWebServicesClient\Common\Types;

class Discipline
{

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Label;

    /**
     * @var bool
     */
    private $IsParaEquestrian;

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->Code;
    }

    /**
     * @return string
     */
    public function getLabel() : string
    {
        return $this->Label;
    }

    /**
     * @return bool
     */
    public function isIsParaEquestrian() : bool
    {
        return $this->IsParaEquestrian;
    }


}

