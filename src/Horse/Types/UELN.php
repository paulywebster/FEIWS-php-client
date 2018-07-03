<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assertion;

class UELN
{
    private $uelnNumber;

    public function __construct(string $uelnNumber)
    {
        $uelnNumber = strtoupper($uelnNumber);
        Assertion::length($uelnNumber, 15, 'The UELN number must be 15 characters long.');
        Assertion::regex(
            $uelnNumber,
            '#^([A-Z0-9]{15})$#',
            'The UELN number should only contains alpha numerical characters.'
        );
        $this->uelnNumber = $uelnNumber;
    }

    public function __toString(): string
    {
        return $this->uelnNumber;
    }
}
