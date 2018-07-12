<?php

namespace Test\Common\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Common\Types\Country;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertInstanceOf(Country::class, Country::create(4));
        $this->assertInstanceOf(Country::class, Country::create('BE'));
        $this->assertInstanceOf(Country::class, Country::create('BEL'));
        $this->assertInstanceOf(Country::class, Country::create('Irak'));
        $this->assertInstanceOf(Country::class, Country::create('Iraq'));
    }

    public function testCannotBeCreatedFromWrongCodeIsoNumeric(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot defined the country.');

        Country::create(1000);
    }

    public function testCannotBeCreatedFromWronglyFormattedCodeIso2Alpha(): void
    {
        $this->expectException(AssertionFailedException::class);
        Country::create('B2');
    }

    public function testCannotBeCreatedFromWrongCodeIso2Alpha(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot defined the country.');
        Country::create('ZZ');
    }

    public function testCannotBeCreatedFromWronglyFormattedFEICode(): void
    {
        $this->expectException(AssertionFailedException::class);
        Country::create('B3L');
    }

    public function testCannotBeCreatedFromWrongFEICode(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot defined the country.');
        Country::create('ZZZ');
    }

    public function testCannotCreateAValidCountryWhoIsNotRecognizedByFEI(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot defined the country.');

        Country::create('Guadeloupe');
    }
}
