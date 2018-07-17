<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\FEIID;
use PHPUnit\Framework\TestCase;

class FEIIDTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertTrue((new FEIID(10000001))->isPhysicalPerson());
        $this->assertTrue((new FEIID(20000001))->isCorporation());
    }

    public function testCannotBeCreatedWithAWrongId(): void
    {
        $this->expectException(AssertionFailedException::class);

        new FEIID(100);
    }
}
