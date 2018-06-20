<?php

namespace Test;

use FEIWebServicesClient\Environment;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class EnvironmentTest extends TestCase
{
    public function testCannotBeCreatedFromAInvalidString(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Environment::fromString('testing');
    }

    public function testReturnCorrectUrl(): void
    {
        $this->assertEquals('https://idata.fei.org/_vti_bin', Environment::integration()->url());
        $this->assertEquals('https://vdata.fei.org/_vti_bin', Environment::validation()->url());
        $this->assertEquals('https://data.fei.org/_vti_bin', Environment::production()->url());
    }
}
