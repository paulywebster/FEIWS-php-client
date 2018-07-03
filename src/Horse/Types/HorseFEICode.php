<?php

namespace FEIWebServicesClient\Horse\Types;

class HorseFEICode
{
    private const OLD_PATTERN = '#^([A-Z]{3}\d{5})$#';
    private const NEW_PATTERN = '#^(\d{3}[A-Z]{2}\d{2})$#';

    private $number;

    public function __construct(string $number)
    {
        $number = strtoupper($number);
        if (!preg_match(self::NEW_PATTERN, $number) && !preg_match(self::OLD_PATTERN, $number)) {
            throw new \InvalidArgumentException(
                sprintf('The horse FEI code given "%s" does not match the required pattern', $number)
            );
        }
        $this->number = $number;
    }

    public function __toString(): string
    {
        return $this->number;
    }
}
