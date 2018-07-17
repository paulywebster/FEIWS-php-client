<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\UELN;
use PHPUnit\Framework\TestCase;

class UELNTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertInstanceOf(UELN::class, new UELN('123456789456123'));
        $this->equalTo('123456789456123', (string)new UELN('123456789456123'));
    }

    public function testCannotBeCreatedWithTooShortValue(): void
    {
        $this->expectException(AssertionFailedException::class);
        $this->expectExceptionMessage('The UELN number must be 15 characters long.');

        new UELN('12345678945612');
    }

    public function testCannotBeCreatedWithWrongFormat(): void
    {
        $this->expectException(AssertionFailedException::class);
        $this->expectExceptionMessage('The UELN number should only contains alpha numerical characters.');

        new UELN('12345678945612@');
    }
}
