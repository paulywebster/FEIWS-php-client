<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assert;

class HorseNameFactory
{
    private const HORSE_NAME_PATTERN = "#^[a-zA-Z0-9 ][a-zA-Z0-9 ']*$#";

    private $name;

    private function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function createAsCurrentOrBirthName(string $currentName): self
    {
        Assert::that($currentName)
            ->minLength(3)
            ->maxLength(30)
            ->regex(
            self::HORSE_NAME_PATTERN,
            "The horse name '%s' contains invalid character(s)."
        );

        return new self($currentName);
    }

    public static function createAsShortName(string $shortName): self
    {
        Assert::that($shortName)
            ->minLength(3)
            ->maxLength(20)
            ->regex(
                self::HORSE_NAME_PATTERN,
                "The horse name '%s' contains invalid character(s)."
            );

        return new self($shortName);
    }

    public static function createAsSireOrDamName(string $name): self
    {
        Assert::that($name)->maxLength(30);

        return new self($name);
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
