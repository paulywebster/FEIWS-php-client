<?php

namespace FEIWebServicesClient\Common\Types;

class MessageType
{

    /**
     * @var string
     */
    private $Id;

    /**
     * @var bool
     */
    private $IsCritical;

    /**
     * @var bool
     */
    private $IsError;

    /**
     * @var bool
     */
    private $IsWarning;

    /**
     * @var string
     */
    private $CEW;

    /**
     * @var string
     */
    private $Description;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->Id;
    }

    /**
     * @return bool
     */
    public function isIsCritical() : bool
    {
        return $this->IsCritical;
    }

    /**
     * @return bool
     */
    public function isIsError() : bool
    {
        return $this->IsError;
    }

    /**
     * @return bool
     */
    public function isIsWarning() : bool
    {
        return $this->IsWarning;
    }

    /**
     * @return string
     */
    public function getCEW() : string
    {
        return $this->CEW;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->Description;
    }


}

