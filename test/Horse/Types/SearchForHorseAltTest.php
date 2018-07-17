<?php

namespace Test\Horse\Types;

use FEIWebServicesClient\Horse\Types\SearchForHorseAlt;
use PHPUnit\Framework\TestCase;

class SearchForHorseAltTest extends TestCase
{
    public function testCanBeCreatedWithValidValues(): void
    {
        $this->assertInstanceOf(
            SearchForHorseAlt::class,
            new SearchForHorseAlt(
                [
                    'AnyName' => 'Jumper',
                    'AnyID' => '123456',
                    'Registration' => 2,
                    'RegYear' => 2018,
                ]
            )
        );
    }

    /**
     * @dataProvider invalidConditions
     */
    public function testCannotBeCreatedWhenAllRequiredFieldsIsNotSpecifed($conditions): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'You must specify if you search a registered or a non-registered horses with the "Registration" condition when you use the registrations conditions as "RegYear","RegDiscipline","RegDateFrom","RegDateTo"'
        );

        new SearchForHorseAlt($conditions);
    }

    public function invalidConditions(): array
    {
        return [
            [['RegYear' => 2018]],
            [['RegDiscipline' => 'D']],
            [['RegDateFrom' => '2018-01-01']],
            [['RegDateTo' => '2018-01-01']],
        ];
    }
}
