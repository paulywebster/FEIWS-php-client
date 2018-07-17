<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\HorseOwnership;
use PHPUnit\Framework\TestCase;

class HorseOwnershipTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertInstanceOf(
            HorseOwnership::class,
            new HorseOwnership(
                [
                    'NationalityOfOwnership' => 'BEL',
                    'DateFrom' => 'first day of january last year',
                    'Members' => [
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
                    ],
                ], new \DateTimeImmutable('first day of january last year')
            )
        );
    }

    public function testCannotBeCreatedWhenTheOwnershipDateIsInTheFutur(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The ownership date from cannot be set before the birthdate or in the future.');

        new HorseOwnership(
            [
                'NationalityOfOwnership' => 'BEL',
                'DateFrom' => 'tomorrow',
                'Members' => [
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
                ],
            ], new \DateTimeImmutable('first day of january last year')
        );
    }

    public function testCannotBeCreatedWhenTheOwnershipDateIsSetBeforeTheBirthDate(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The ownership date from cannot be set before the birthdate or in the future.');

        new HorseOwnership(
            [
                'NationalityOfOwnership' => 'BEL',
                'DateFrom' => '2017-01-01',
                'Members' => [
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
                ],
            ], new \DateTimeImmutable('2018-01-01')
        );
    }

    /**
     * @dataProvider invalidData
     */
    public function testCannotBeCreatedWithInvalidValue($invalidValues): void
    {
        $this->expectException(AssertionFailedException::class);

        new HorseOwnership($invalidValues, new \DateTimeImmutable('first day of january last year'));
    }

    public function invalidData(): array
    {
        return [
            'test missing required NationalityOfOwnership field' => [
                [
                    'DateFrom' => 'first day of january last year',
                    'Members' => [
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
                    ],
                ],
            ],
            'test missing required DateFrom field' => [
                [
                    'NationalityOfOwnership' => 'BEL',
                    'Members' => [
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
                    ],
                ],
            ],
            'test missing required Members field' => [
                [
                    'NationalityOfOwnership' => 'BEL',
                    'DateFrom' => 'first day of january last year',
                ],
            ],
            'test wrong type DateFrom field' => [
                [
                    'NationalityOfOwnership' => 'BEL',
                    'DateFrom' => new \DateTimeImmutable('first day of january last year'),
                    'Members' => [
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
                    ],
                ],
            ],
            'test blank DateFrom field' => [
                [
                    'NationalityOfOwnership' => 'BEL',
                    'DateFrom' => '',
                    'Members' => [
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
                    ],
                ],
            ],
            'test wrong type members field' => [
                [
                    'NationalityOfOwnership' => 'BEL',
                    'DateFrom' => 'first day of january last year',
                    'Members' => 'members not array',
                ],
            ],
            'test empty array members field' => [
                [
                    'NationalityOfOwnership' => 'BEL',
                    'DateFrom' => 'first day of january last year',
                    'Members' => [],
                ],
            ],
        ];
    }

    public function testReturnArrayWithKeys(): void
    {
        $horseOwnership = new HorseOwnership(
            [
                'NationalityOfOwnership' => 'BEL',
                'DateFrom' => 'first day of january last year',
                'Members' => [
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
                ],
            ], new \DateTimeImmutable('first day of january last year')
        );

        $data = $horseOwnership->data();

        $this->assertArrayHasKey('NationalityOfOwnership', $data);
        $this->assertArrayHasKey('DateFrom', $data);
        $this->assertArrayHasKey('Members', $data);
    }
}
