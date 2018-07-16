<?php

namespace Test\Horse\Types;

use FEIWebServicesClient\Horse\Types\ArrayOfHorseOwnershipMember;
use FEIWebServicesClient\Horse\Types\HorseOwnershipMember;
use PHPUnit\Framework\TestCase;

class ArrayOfHorseOwnershipMemberTest extends TestCase
{
    public function testCanBeCreatedWithValidValues(): void
    {
        $this->assertInstanceOf(
            ArrayOfHorseOwnershipMember::class,
            new ArrayOfHorseOwnershipMember(
                [
                    [
                        'FEIID' => 10000001,
                        'Address' => [
                            'CountryCode' => 'BEL',
                            'Address1' => 'Belgicastraat 9/2',
                            'Zip' => '1930',
                            'City' => 'Zaventem',
                            'IsMailingAddress' => false,
                        ],
                        'OwnershipPercentage' => 100,
                        'FamilyName' => 'Doe',
                        'FirstName' => 'John',
                    ],
                ]
            )
        );
    }

    public function testCannotBeCreatedWhenTotalOfOwnershipPercentageNotEqualsTo100(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The total percentage of ownership must be equals to 100. 50 given.');

        new ArrayOfHorseOwnershipMember(
            [
                [
                    'FEIID' => 10000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 50,
                    'FamilyName' => 'Doe',
                    'FirstName' => 'John',
                ],
            ]
        );
    }
}
