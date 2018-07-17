<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\HorseNew;
use PHPUnit\Framework\TestCase;

class HorseNewTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertInstanceOf(
            HorseNew::class,
            new HorseNew(
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'first day of january last year',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                    'OwnerDateFrom' => 'first day of january last year',
                    'Ownership' => [
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
                    ],
                ]
            )
        );
    }

    public function testCannotBeCreatedWhenTheownershipDateFromIsSetBeforBirthdate(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The ownership date from cannot be set before the birthdate or in the future.');

        new HorseNew(
            [
                'BirthName' => 'Jumper',
                'DateBirth' => 'first day of january this year',
                'CastratedId' => 1,
                'CurrentName' => 'Jumper2',
                'IsPony' => false,
                'NatPassport' => '123456789',
                'IsActive' => true,
                'GenderCode' => 'M',
                'ColorCode' => 'black',
                'IssuingNFCode' => 'BEL',
                'Microchip' => '123456789456123',
                'RecognitionCode' => '132568978546',
                'IssuingBodyCode' => 'BEL-HBSM',
                'OwnerDateFrom' => 'first day of january last year',
                'Ownership' => [
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
                ],
            ]
        );
    }

    public function testCannotBeCreatedWhenTheownershipDateFromIsSetInTheFutur(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The ownership date from cannot be set before the birthdate or in the future.');

        new HorseNew(
            [
                'BirthName' => 'Jumper',
                'DateBirth' => 'first day of january this year',
                'CastratedId' => 1,
                'CurrentName' => 'Jumper2',
                'IsPony' => false,
                'NatPassport' => '123456789',
                'IsActive' => true,
                'GenderCode' => 'M',
                'ColorCode' => 'black',
                'IssuingNFCode' => 'BEL',
                'Microchip' => '123456789456123',
                'RecognitionCode' => '132568978546',
                'IssuingBodyCode' => 'BEL-HBSM',
                'OwnerDateFrom' => 'tomorrow',
                'Ownership' => [
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
                ],
            ]
        );
    }

    public function testCannotbeCreatedWhenOwnerDateFromKeyIsNotSet()
    {
        $this->expectException(AssertionFailedException::class);

        new HorseNew(
            [
                'BirthName' => 'Jumper',
                'DateBirth' => 'first day of january this year',
                'CastratedId' => 1,
                'CurrentName' => 'Jumper2',
                'IsPony' => false,
                'NatPassport' => '123456789',
                'IsActive' => true,
                'GenderCode' => 'M',
                'ColorCode' => 'black',
                'IssuingNFCode' => 'BEL',
                'Microchip' => '123456789456123',
                'RecognitionCode' => '132568978546',
                'IssuingBodyCode' => 'BEL-HBSM',
                'Ownership' => [
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
                ],
            ]
        );
    }

    public function testCannotbeCreatedWhenOwnershipKeyIsNotSet()
    {
        $this->expectException(AssertionFailedException::class);

        new HorseNew(
            [
                'BirthName' => 'Jumper',
                'DateBirth' => 'first day of january this year',
                'CastratedId' => 1,
                'CurrentName' => 'Jumper2',
                'IsPony' => false,
                'NatPassport' => '123456789',
                'IsActive' => true,
                'GenderCode' => 'M',
                'ColorCode' => 'black',
                'IssuingNFCode' => 'BEL',
                'Microchip' => '123456789456123',
                'RecognitionCode' => '132568978546',
                'IssuingBodyCode' => 'BEL-HBSM',
                'OwnerDateFrom' => 'first day of january this year',
            ]
        );
    }

    public function testReturnArrayWithKeys()
    {
        $horse = new HorseNew(
            [
                'BirthName' => 'Jumper',
                'DateBirth' => 'first day of january last year',
                'CastratedId' => 1,
                'CurrentName' => 'Jumper2',
                'IsPony' => false,
                'NatPassport' => '123456789',
                'IsActive' => true,
                'GenderCode' => 'M',
                'ColorCode' => 'black',
                'IssuingNFCode' => 'BEL',
                'Microchip' => '123456789456123',
                'RecognitionCode' => '132568978546',
                'IssuingBodyCode' => 'BEL-HBSM',
                'OwnerDateFrom' => 'first day of january last year',
                'Ownership' => [
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
                ],
            ]
        );

        $data = $horse->data();

        $this->assertArrayHasKey('BirthName', $data);
        $this->assertArrayHasKey('IsCNSuffix', $data);
        $this->assertArrayHasKey('DateBirth', $data);
        $this->assertArrayHasKey('CastratedId', $data);
        $this->assertArrayHasKey('OwnerDateFrom', $data);
        $this->assertArrayHasKey('CurrentName', $data);
        $this->assertArrayHasKey('IsPony', $data);
        $this->assertArrayHasKey('NatPassport', $data);
        $this->assertArrayHasKey('IsActive', $data);
        $this->assertArrayHasKey('GenderCode', $data);
        $this->assertArrayHasKey('ColorCode', $data);
        $this->assertArrayHasKey('ColorComplement', $data);
        $this->assertArrayHasKey('FEICodeType', $data);
        $this->assertArrayHasKey('IssuingNFCode', $data);
        $this->assertArrayHasKey('Microchip', $data);
        $this->assertArrayHasKey('IssuingBodyCode', $data);
        $this->assertArrayHasKey('RecognitionCode', $data);
        $this->assertArrayHasKey('Ownership', $data);
    }
}
