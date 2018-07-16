<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\HorseNameFactory;
use PHPUnit\Framework\TestCase;

class HorseNameFactoryTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertInstanceOf(HorseNameFactory::class, HorseNameFactory::createAsCurrentOrBirthName('Jumper'));
        $this->assertInstanceOf(HorseNameFactory::class, HorseNameFactory::createAsShortName('Jumper'));
        $this->assertInstanceOf(HorseNameFactory::class, HorseNameFactory::createAsSireOrDamName('Jumper'));
    }

    /**
     * @dataProvider wrongValueForCurrentOrBirthName
     */
    public function testCannotBeCreatedAsCurrentOrBirthNameWithWrongValue($name): void
    {
        $this->expectException(AssertionFailedException::class);

        HorseNameFactory::createAsCurrentOrBirthName($name);
    }

    public function wrongValueForCurrentOrBirthName(): array
    {
        return [
            ['ji'],
            ['aNameVeryLongAndBiggerThanThirtyCharacters'],
            ['c@t'],
        ];
    }

    /**
     * @dataProvider wrongValueForShortName
     */
    public function testCannotBeCreatedAsShortNameWithWrongValue($name): void
    {
        $this->expectException(AssertionFailedException::class);

        HorseNameFactory::createAsShortName($name);
    }

    public function wrongValueForShortName(): array
    {
        return [
            ['ji'],
            ['aNameVeryLongAndBiggerThanTwentyCharacters'],
            ['c@t'],
        ];
    }

    /**
     * @dataProvider wrongValueForSireOrDamName
     */
    public function testCannotBeCreatedAsSireOrDamNameWithWrongValue($name): void
    {
        $this->expectException(AssertionFailedException::class);

        HorseNameFactory::createAsSireOrDamName($name);
    }

    public function wrongValueForSireOrDamName(): array
    {
        return [
            ['aNameVeryLongAndBiggerThanTwentyCharacters'],
        ];
    }
}
