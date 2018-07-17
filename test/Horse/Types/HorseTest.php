<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\Horse;
use PHPUnit\Framework\TestCase;

class HorseTest extends TestCase
{
    private $horse;

    public function setUp()
    {
        $this->horse = [
            'BirthName' => 'Jumper',
            'DateBirth' => 'yesterday',
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
        ];
    }

    public function testCanBeCreatedWithValidValues(): void
    {
        $this->assertInstanceOf(Horse::class, new Horse($this->horse));
    }

    public function testCannotBeCreatedWhenBirthdateIsSetInTheFutur(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The birthdate cannot be set before 1980-01-01 or in the future.');

        $invalidHorse = $this->horse;
        $invalidHorse['DateBirth'] = 'tomorrow';

        new Horse($invalidHorse);
    }

    public function testCannotBeCreatedWhenBirthdateIsSetBefore1980(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The birthdate cannot be set before 1980-01-01 or in the future.');

        $invalidHorse = $this->horse;
        $invalidHorse['DateBirth'] = '01-01-1979';

        new Horse($invalidHorse);
    }

    /**
     * @dataProvider invalidGenderCombination
     */
    public function testCannotBeCreatedWhenGenderCodeAndCastrateIdDoesNotMatch(
        string $genderCode,
        int $castrateId
    ): void {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The gender code expected with the CastratedId given must be M.');

        $invalidHorse = $this->horse;
        $invalidHorse['GenderCode'] = $genderCode;
        $invalidHorse['CastratedId'] = $castrateId;

        new Horse($invalidHorse);
    }

    public function invalidGenderCombination(): array
    {
        return [
            ['F', 1],
            ['F', 3],
        ];
    }

    /**
     * @dataProvider invalidValue
     */
    public function testCannotBeCreatedWithInvalidValues($invalidHorse): void
    {
        $this->expectException(AssertionFailedException::class);

        new Horse($invalidHorse);
    }

    public function invalidValue(): array
    {
        return [
            'missing required BirthName field' => [
                [
                    'DateBirth' => 'yesterday',
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
                ],
            ],
            'missing required DateBirth field' => [
                [
                    'BirthName' => 'Jumper',
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
                ],
            ],
            'missing required CastratedId field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
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
                ],
            ],
            'missing required CurrentName field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'missing required IsPony field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'missing required NatPassport field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'missing required IsActive field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'missing required GenderCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'missing required ColorCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'missing required IssuingNFCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'missing required IssuingBodyCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'Microchip' => '123456789456123',
                    'IssuingNFCode' => 'BEL',
                    'RecognitionCode' => '132568978546',
                ],
            ],
            'missing required Microchip field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'missing required RecognitionCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'not allowed value CastratedId field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 4,
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
                ],
            ],
            'not boolean value IsPony field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => 'false',
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'greater than 20 length value NatPassport field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789123456789456123465',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'blank value NatPassport field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'not boolean value IsActive field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => 'true',
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'not allowed value GenderCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'O',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'not allowed value ColorCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'red',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'not missing value when color other ColorCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'other',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'color complement greater than 50 length ColorCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'other',
                    'ColorComplement' => 'a Color Complement With More Than Twenty Characters Long',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '132568978546',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'not allowed FEICodeType field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
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
                    'FEICodeType' => 'J',
                ],
            ],
            'not blank RecognitionCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
            'greather than 20 RecognitionCode field' => [
                [
                    'BirthName' => 'Jumper',
                    'DateBirth' => 'yesterday',
                    'CastratedId' => 1,
                    'CurrentName' => 'Jumper2',
                    'IsPony' => false,
                    'NatPassport' => '123456789',
                    'IsActive' => true,
                    'GenderCode' => 'M',
                    'ColorCode' => 'black',
                    'IssuingNFCode' => 'BEL',
                    'Microchip' => '123456789456123',
                    'RecognitionCode' => '123456789456123123456789',
                    'IssuingBodyCode' => 'BEL-HBSM',
                ],
            ],
        ];
    }
}
