<?php

namespace Test\Common\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Common\Types\Discipline;
use PHPUnit\Framework\TestCase;

class DisciplineTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertInstanceOf(Discipline::class, Discipline::fromString('D'));
        $this->assertInstanceOf(Discipline::class, Discipline::fromString('Jumping'));
    }

    public function testCannotBeCreatedWithValue(): void
    {
        $this->expectException(AssertionFailedException::class);
        Discipline::fromString('d');
    }
}
