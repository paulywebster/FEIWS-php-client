<?php

namespace Test\Horse\Types;

use Assert\AssertionFailedException;
use FEIWebServicesClient\Horse\Types\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    public function testCanBeCreatedWithValidValue(): void
    {
        $this->assertInstanceOf(
            Address::class,
            new Address(
                [
                    'CountryCode' => 'BEL',
                    'Address1' => 'Belgicastraat 9/2',
                    'Zip' => '1930',
                    'City' => 'Zaventem',
                    'IsMailingAddress' => false,
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

        new Address($invalidValues);
    }

    public function invalidData(): array
    {
        return [
            'test missing required field' => [
                [
                    'CountryCode' => 'BEL',
                    'Address1' => 'Belgicastraat 9/2',
                    'Zip' => '1930',
                    'City' => 'Zaventem',
                ],
            ],
            'wrong type Address1' => [
                [
                    'CountryCode' => 'BEL',
                    'Address1' => 2,
                    'Zip' => '1930',
                    'City' => 'Zaventem',
                    'IsMailingAddress' => false,
                ],
            ],
            'wrong blank Address1' => [
                [
                    'CountryCode' => 'BEL',
                    'Address1' => '',
                    'Zip' => '1930',
                    'City' => 'Zaventem',
                    'IsMailingAddress' => false,
                ],
            ],
            'wrong type Zip' => [
                [
                    'CountryCode' => 'BEL',
                    'Address1' => 'Belgicastraat 9/2',
                    'Zip' => 1930,
                    'City' => 'Zaventem',
                    'IsMailingAddress' => false,
                ],
            ],
            'wrong blank Zip' => [
                [
                    'CountryCode' => 'BEL',
                    'Address1' => 'Belgicastraat 9/2',
                    'Zip' => '',
                    'City' => 'Zaventem',
                    'IsMailingAddress' => false,
                ],
            ],
            'wrong type City' => [
                [
                    'CountryCode' => 'BEL',
                    'Address1' => 'Belgicastraat 9/2',
                    'Zip' => '1930',
                    'City' => 1930,
                    'IsMailingAddress' => false,
                ],
            ],
            'wrong blank City' => [
                [
                    'CountryCode' => 'BEL',
                    'Address1' => 'Belgicastraat 9/2',
                    'Zip' => '1930',
                    'City' => '',
                    'IsMailingAddress' => false,
                ],
            ],
            'wrong type IsMailingAddress' => [
                [
                    'CountryCode' => 'BEL',
                    'Address1' => 'Belgicastraat 9/2',
                    'Zip' => '1930',
                    'City' => 'Zaventem',
                    'IsMailingAddress' => '0',
                ],
            ],
        ];
    }

    public function testReturnArrayWithKeys(): void
    {
        $address = new Address(
            [
                'CountryCode' => 'BEL',
                'Address1' => 'Belgicastraat 9/2',
                'Zip' => '1930',
                'City' => 'Zaventem',
                'IsMailingAddress' => false,
            ]
        );

        $data = $address->data();

        $this->assertArrayHasKey('CountryCode', $data);
        $this->assertArrayHasKey('Address1', $data);
        $this->assertArrayHasKey('Zip', $data);
        $this->assertArrayHasKey('City', $data);
        $this->assertArrayHasKey('IsMailingAddress', $data);
        $this->assertArrayHasKey('AddressNameCode', $data);
        $this->assertArrayHasKey('Address2', $data);
        $this->assertArrayHasKey('Address3', $data);
        $this->assertArrayHasKey('PhoneNr', $data);
        $this->assertArrayHasKey('FaxNr', $data);
        $this->assertArrayHasKey('Comment', $data);
        $this->assertArrayHasKey('TCN', $data);
    }
}
