<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\SearchCriteria;
use PHPUnit\Framework\TestCase;

class SearchCriteriaTest extends TestCase
{
    /**
     * @dataProvider validData
     */
    public function testCanBeCreatedWithValidValue($field, $value): void
    {
        $this->assertInstanceOf(SearchCriteria::class, new SearchCriteria($field, $value));
    }

    public function validData(): array
    {
        return [
            ['AnyID', '123456'],
            ['AnyName', 'Jumper'],
            ['InclHistNames', true],
            ['InclHistNames', false],
            ['Pony', 1],
            ['Pony', 2],
            ['Pony', 3],
            ['HorseStatus', 0],
            ['HorseStatus', 1],
            ['HorseStatus', 2],
            ['HorseStatus', 3],
            ['HorseStatus', 9],
            ['HorseStatus', 10],
            ['AdminNF', 'BEL'],
            ['PendAdmNFReq', 'BEL'],
            ['Registration', 2],
            ['Registration', 3],
            ['RegYear', 2018],
            ['RegDiscipline', 'D'],
            ['RegDateFrom', '2018-01-01'],
            ['RegDateTo', '2018-01-01'],
        ];
    }

    /**
     * @dataProvider invalidData
     */
    public function testCannotBeCreatedWithInvalidValue($field, $value): void
    {
        $this->expectException(AssertionFailedException::class);

        new SearchCriteria($field, $value);
    }

    public function invalidData(): array
    {
        return [
            'Not existing field' => ['SCNotExist', 'blabla'],
            'Not string AnyName field' => ['AnyName', 123456],
            'blank AnyName field' => ['AnyName', ''],
            'Not string AnyID field' => ['AnyID', 123456],
            'blank AnyID field' => ['AnyID', ''],
            'not boolean InclHistNames field' => ['InclHistNames', 'true'],
            'not valid value Pony field' => ['Pony', 8],
            'not integer Pony field' => ['Pony', '1'],
            'Not valid value HorseStatus field' => ['HorseStatus', 21],
            'Not integer HorseStatus field' => ['HorseStatus', '10'],
            'Not valid value Registration field' => ['Registration', 21],
            'Not integer Registration field' => ['Registration', '10'],
            'Not integer RegYear field' => ['Registration', '2018'],
        ];
    }
}
