<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseRegistration
{
    /**
     * @var string
     */
    private $FEIID;

    /**
     * @var string
     */
    private $DisciplineCode;

    /**
     * @var int
     */
    private $Year;

    /**
     * @var \DateTime
     */
    private $DateRegistration;

    /**
     * @return string
     */
    public function getFEIID(): string
    {
        return $this->FEIID;
    }

    /**
     * @return string
     */
    public function getDisciplineCode(): string
    {
        return $this->DisciplineCode;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->Year;
    }

    /**
     * @return \DateTime
     */
    public function getDateRegistration(): \DateTime
    {
        return $this->DateRegistration;
    }
}
