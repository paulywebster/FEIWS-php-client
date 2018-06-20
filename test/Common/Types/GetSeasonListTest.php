<?php

namespace Test\Common\Types;

use FEIWebServicesClient\Common\Types\GetSeasonList;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class GetSeasonListTest extends TestCase
{
    public function testCanBeCreatedWithValidDisciplineCode(): void
    {
        $this->assertInstanceOf(GetSeasonList::class, new GetSeasonList('D'));
    }

    public function testCannotBeCreatedWithAnInvalidDisciplineCode(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The discipline code W is not allowed.');

        new GetSeasonList('W');
    }
}
