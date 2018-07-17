<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\Chip;
use PHPUnit\Framework\TestCase;

class ChipTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertInstanceOf(Chip::class, new Chip('123456789456123'));
        $this->equalTo('123456789456123', (string)new Chip('123456789456123'));
    }

    public function testCannotBeCreatedWithTooShortValue(): void
    {
        $this->expectException(AssertionFailedException::class);
        $this->expectExceptionMessage('The Chip number must be 15 characters long.');

        new Chip('12345678945612');
    }

    public function testCannotBeCreatedWithWrongFormat(): void
    {
        $this->expectException(AssertionFailedException::class);
        $this->expectExceptionMessage('The Chip number should only contains alpha numerical characters.');

        new Chip('12345678945612@');
    }
}
