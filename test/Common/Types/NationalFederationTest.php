<?php

namespace Test\Common\Types;

use FEIWebServicesClient\Common\Types\Country;
use FEIWebServicesClient\Common\Types\NationalFederation;
use PHPUnit\Framework\TestCase;

class NationalFederationTest extends TestCase
{
    public function testCanBeCreatedWithAValidnationalFederation(): void
    {
        $this->assertInstanceOf(NationalFederation::class, new NationalFederation(Country::create('BE')));
    }

    public function testCannotBeCreatedWithANonRecognizedFederation(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot defined the national federation.');

        new NationalFederation(Country::create('BDI'));
    }
}
