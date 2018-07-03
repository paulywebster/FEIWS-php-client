<?php

namespace Test\Horse;

use FEIWebServicesClient\Horse\Types\HorseFEICode;
use PHPUnit\Framework\TestCase;

class HorseFEICodeTest extends TestCase
{
    public function testCanBeCreatedFromAValidCode(): void
    {
        $this->assertInstanceOf(HorseFEICode::class, new HorseFEICode('203VE41'));
        $this->assertInstanceOf(HorseFEICode::class, new HorseFEICode('BEL12345'));
    }

    public function testCannotBeCreatedWithAInvalidCode(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new HorseFEICode('US4587');
    }
}
