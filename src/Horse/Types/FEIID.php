<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assertion;

class FEIID
{
    private const PHYSICAL_PERSON = 'PHYSICAL_PERSON';
    private const CORPORATION = 'CORPORATION';

    private $number;
    private $type;

    public function __construct(int $number)
    {
        Assertion::between($number, 10000000, 29999999);
        if(substr($number, 0, 1) === '1'){
            $type = self::PHYSICAL_PERSON;
        }else{
            $type = self::CORPORATION;
        }
        $this->type = $type;
        $this->number = $number;
    }

    public function number(): int
    {
        return $this->number;
    }

    public function isPhysicalPerson(): bool
    {
        return self::PHYSICAL_PERSON === $this->type;
    }

    public function isCorporation(): bool
    {
        return self::CORPORATION === $this->type;
    }
}
