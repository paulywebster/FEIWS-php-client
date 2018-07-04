<?php

namespace Test\Horse\Types;

use FEIWebServicesClient\Horse\Types\HorseFEICode;
use FEIWebServicesClient\Horse\Types\RegisterHorse;
use PHPUnit\Framework\TestCase;

class RegisterHorseTest extends TestCase
{
    public function testCanBeCreatedWithValidArgument(): void
    {
        $this->assertInstanceOf(RegisterHorse::class, new RegisterHorse(
            new HorseFEICode('203VE41'),
            (int) date('Y'),
            ['S'],
            new \DateTimeImmutable('now')
        ));
    }

    public function testCanBeCreatedWithAGreaterYearThanCurrentButInThe6WeeksBeforeTheYear(): void
    {
        $this->assertInstanceOf(RegisterHorse::class, new RegisterHorse(
            new HorseFEICode('203VE41'),
            2019,
            ['S'],
            new \DateTimeImmutable('2018-12-06')
        ));
    }

    public function testCannotBeCreatedWithAYearLowerThanCurrent(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The time limit for registration for the year 2017 is expired.');

        new RegisterHorse(
            new HorseFEICode('203VE41'),
            2017,
            ['S'],
            new \DateTimeImmutable('2018-06-06')
        );
    }

    public function testCannotBeCreatedWithAYearGreaterThanCurrent(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('A registration may not be made more than a few weeks in advance. Currently this is set at 6 weekds, but this is subject to review.');

        new RegisterHorse(
            new HorseFEICode('203VE41'),
            2020,
            ['S'],
            new \DateTimeImmutable('2018-06-06')
        );
    }

    public function testCannotBeCreatedWithAYearGreaterThanCurrentAndNotInThe6WeekBefore(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('A registration may not be made more than a few weeks in advance. Currently this is set at 6 weekds, but this is subject to review.');

        new RegisterHorse(
            new HorseFEICode('203VE41'),
            2019,
            ['S'],
            new \DateTimeImmutable('2018-06-06')
        );
    }
}
