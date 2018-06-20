<?php

namespace Test\Common\Types;

use FEIWebServicesClient\Common\Types\GetLeagueList;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class GetLeagueListTest extends TestCase
{
    public function testCanBeCreatedWithValidDisciplineAndSeasonCode(): void
    {
        $this->assertInstanceOf(GetLeagueList::class, new GetLeagueList('D', '2018/18'));
    }

    public function testCannotBeCreatedWithAnInvalidDisciplineCode(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The discipline code W is not allowed.');

        new GetLeagueList('W', '2018/18');
    }

    public function testCannotBeCreatedWithAnInvalidSeasonCode(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The season code 200018 does not match the required format.');

        new GetLeagueList('D', '200018');
    }
}
