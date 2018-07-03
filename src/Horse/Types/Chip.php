<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assertion;

class Chip
{
    private $chipNumber;

    public function __construct(string $chipNumber)
    {
        $chipNumber = strtoupper($chipNumber);
        Assertion::length($chipNumber, 15, 'The Chip number must be 15 characters long.');
        Assertion::regex(
            $chipNumber,
            '#^([A-Z0-9]{15})$#',
            'The Chip number should only contains alpha numerical characters.'
        );
        $this->chipNumber = $chipNumber;
    }

    public function __toString(): string
    {
        return $this->chipNumber;
    }
}
