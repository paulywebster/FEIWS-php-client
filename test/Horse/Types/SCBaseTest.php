<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\SCBase;
use PHPUnit\Framework\TestCase;

class SCBaseTest extends TestCase
{
    /**
     * @dataProvider validData
     */
    public function testCanBeCreatedWithValidValue($field, $value): void
    {
        $this->assertInstanceOf(SCBase::class, new SCBase($field, $value));
    }

    public function validData(): array
    {
        return [
            ['SCHorseName', 'Jumper'],
            ['SCHorseAnyID', '123456'],
            ['SCHorseInclHistNames', true],
            ['SCHorseInclHistNames', false],
            ['SCHorsePony', 'Yes'],
            ['SCHorsePony', 'No'],
            ['SCHorseCurrentOwner', 'Lucky Luke'],
            ['SCHorseHorseStatus', 'Active'],
            ['SCHorseHorseStatus', 'Inactive'],
            ['SCHorseHorseStatus', 'Pending'],
            ['SCHorseHorseStatus', 'Cancelled'],
            ['SCHorseHorseStatus', 'Suspended'],
            ['SCHorseAdminNF', 'BEL'],
            ['SCHorsePendAdmNFReq', 'BEL'],
            ['SCHorseRegistration', ['Status' => 'Registered', 'Year' => 2018]],
            ['SCHorseRegistration', ['Status' => 'NotRegistered', 'Year' => 2018]],
            ['SCHorseRegDiscipline', 'D'],
            ['SCHorseRegDateFrom', '2018-01-01'],
            ['SCHorseRegDateTo', '2018-01-01'],
            ['SCHorseStudbook', 'KWP'],
        ];
    }

    /**
     * @dataProvider invalidData
     */
    public function testCannotBeCreatedWithInvalidValue($field, $value): void
    {
        $this->expectException(AssertionFailedException::class);

        new SCBase($field, $value);
    }

    public function invalidData(): array
    {
        return [
            'Not existing field' => ['SCNotExist', 'blabla'],
            'Not string SCHorseName field' => ['SCHorseName', 123456],
            'blank SCHorseName field' => ['SCHorseName', ''],
            'Not string SCHorseAnyID field' => ['SCHorseAnyID', 123456],
            'blank SCHorseAnyID field' => ['SCHorseAnyID', ''],
            'not boolean SCHorseInclHistNames field' => ['SCHorseInclHistNames', 'true'],
            'not valid value SCHorsePony field' => ['SCHorsePony', 'true'],
            'Not string SCHorseCurrentOwner field' => ['SCHorseCurrentOwner', 123456],
            'blank SCHorseCurrentOwner field' => ['SCHorseCurrentOwner', ''],
            'not valid value SCHorseHorseStatus field' => ['SCHorseHorseStatus', 'true'],
            'not contains required field SCHorseRegistration field' => ['SCHorseRegistration', 'true'],
            'not valid value SCHorseRegistration field' => [
                'SCHorseRegistration',
                ['Status' => 'valid', 'Year' => 2018],
            ],
            'not integer year SCHorseRegistration field' => [
                'SCHorseRegistration',
                ['Status' => 'Registered', 'Year' => '2018'],
            ],
        ];
    }
}
