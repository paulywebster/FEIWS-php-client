<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\HorseOwnershipMember;
use PHPUnit\Framework\TestCase;

class HorseOwnershipMemberTest extends TestCase
{
    public function testCanBeCreatedAsPhysicalPersonWithValidValue(): void
    {
        $this->assertInstanceOf(
            HorseOwnershipMember::class,
            new HorseOwnershipMember(
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
                ]
            )
        );
    }

    public function testCanBeCreatedAsCorporationWithValidValue(): void
    {
        $this->assertInstanceOf(
            HorseOwnershipMember::class,
            new HorseOwnershipMember(
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'CorporationName' => 'FEI',
                    'CorporationContactFEIID' => '10000001',
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => 'John',
                ]
            )
        );
    }

    /**
     * @dataProvider invalidData
     */
    public function testCannotBeCreatedWithInvalidValue($invalidValues): void
    {
        $this->expectException(AssertionFailedException::class);

        new HorseOwnershipMember($invalidValues);
    }

    public function invalidData(): array
    {
        return [
            'test missing required FEIID field' => [
                [
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
            'test missing required address field' => [
                [
                    'FEIID' => 10000001,
                    'OwnershipPercentage' => 100,
                    'FamilyName' => 'Doe',
                    'FirstName' => 'John',
                ],
            ],
            'test missing required ownership percentage field' => [
                [
                    'FEIID' => 10000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'FamilyName' => 'Doe',
                    'FirstName' => 'John',
                ],
            ],
            'test missing required family name field for physical person' => [
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
                    'FirstName' => 'John',
                ],
            ],
            'test missing required firstname field for physical person' => [
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
                ],
            ],
            'test wrong type family name field for physical person' => [
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
                    'FamilyName' => 12398,
                    'FirstName' => 'John',
                ],
            ],
            'test blank family name field for physical person' => [
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
                    'FamilyName' => '',
                    'FirstName' => 'John',
                ],
            ],
            'test wrong type first name field for physical person' => [
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
                    'FirstName' => 4567,
                ],
            ],
            'test blank first name field for physical person' => [
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
                    'FirstName' => '',
                ],
            ],
            'test missing required CorporationName field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => 'John',
                ],
            ],
            'test missing required CorporationContactFEIID field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => 'FEI',
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => 'John',
                ],
            ],
            'test missing required CorporationContactFamilyName field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => 'FEI',
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFirstName' => 'John',
                ],
            ],
            'test missing required CorporationContactFirstName field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => 'FEI',
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 'Doe',
                ],
            ],
            'test wrong type Corporation field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => 123456,
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => 'John',
                ],
            ],
            'test blank Corporation field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => '',
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => 'John',
                ],
            ],
            'test wrong type CorporationContactFamilyName field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => 'FEI',
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 1231,
                    'CorporationContactFirstName' => 'John',
                ],
            ],
            'test blank CorporationContactFamilyName field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => 123456,
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => '',
                    'CorporationContactFirstName' => 'John',
                ],
            ],
            'test wrong type CorporationContactFirstName field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => 'FEI',
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => 2123132,
                ],
            ],
            'test blank CorporationContactFirstName field for corporation' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 100,
                    'Corporation' => 123456,
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => '',
                ],
            ],
            'test empty OwnershipPercentage field' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 0,
                    'Corporation' => 123456,
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => '',
                ],
            ],
            'test not numeric OwnershipPercentage field' => [
                [
                    'FEIID' => 20000001,
                    'Address' => [
                        'CountryCode' => 'BEL',
                        'Address1' => 'Belgicastraat 9/2',
                        'Zip' => '1930',
                        'City' => 'Zaventem',
                        'IsMailingAddress' => false,
                    ],
                    'OwnershipPercentage' => 'hundred',
                    'Corporation' => 123456,
                    'CorporationContactFEIID' => 10000001,
                    'CorporationContactFamilyName' => 'Doe',
                    'CorporationContactFirstName' => '',
                ],
            ],
        ];
    }

    public function testReturnArrayWithKeys(): void
    {
        $address = new HorseOwnershipMember(
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
            ]
        );

        $data = $address->data();

        $this->assertArrayHasKey('FEIID', $data);
        $this->assertArrayHasKey('FamilyName', $data);
        $this->assertArrayHasKey('FirstName', $data);
        $this->assertArrayHasKey('CorporationName', $data);
        $this->assertArrayHasKey('CorporationContactFEIID', $data);
        $this->assertArrayHasKey('CorporationContactFamilyName', $data);
        $this->assertArrayHasKey('CorporationContactFirstName', $data);
        $this->assertArrayHasKey('Address', $data);
        $this->assertArrayHasKey('OwnershipPercentage', $data);
    }
}
