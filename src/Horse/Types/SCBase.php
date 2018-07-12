<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assert;
use FEIWebServicesClient\Common\Types\Discipline;
use FEIWebServicesClient\Common\Types\Country;
use FEIWebServicesClient\Common\Types\NationalFederation;

class SCBase
{
    /**
     * @var string
     */
    private $Field;

    /**
     * @var string
     */
    private $Value;

    private static function getFieldList(): array
    {
        return [
            'SCHorseName',
            'SCHorseAnyID',
            'SCHorseInclHistNames',
            'SCHorsePony',
            'SCHorseCurrentOwner',
            'SCHorseHorseStatus',
            'SCHorseAdminNF',
            'SCHorsePendAdmNFReq',
            'SCHorseRegistration',
            'SCHorseRegDiscipline',
            'SCHorseRegDateFrom',
            'SCHorseRegDateTo',
            'SCHorseStudbook',
        ];
    }

    public function __construct(string $Field, $value)
    {
        Assert::that($Field)->inArray(self::getFieldList());

        if ('SCHorseName' === $Field) {
            Assert::that($value)->string()->notBlank();
            $value = [
                'Name' => $value,
                'Unconstrained' => false,
            ];
        }

        if ('SCHorseAnyID' === $Field) {
            Assert::that($value)->string()->notBlank();
            $value = [
                'ID' => $value,
            ];
        }

        if ('SCHorseInclHistNames' === $Field) {
            Assert::that($value)->boolean();
            $value = [
                'Value' => $value,
            ];
        }

        if ('SCHorsePony' === $Field) {
            Assert::that($value)->inArray(['Yes', 'No']);
            $value = [
                'Value' => $value,
            ];
        }

        if ('SCHorseCurrentOwner' === $Field) {
            Assert::that($value)->string()->notBlank();
            $value = [
                'Value' => $value,
            ];
        }

        if ('SCHorseHorseStatus' === $Field) {
            Assert::that($value)->inArray(['Active', 'Inactive', 'Pending', 'Cancelled', 'Suspended']);
            $value = [
                'Value' => $value,
            ];
        }

        if ('SCHorseAdminNF' === $Field) {
            $value = [
                'Value' => new NationalFederation(Country::create($value)),
            ];
        }

        if ('SCHorsePendAdmNFReq' === $Field) {
            $value = [
                'Value' => new NationalFederation(Country::create($value)),
            ];
        }

        if ('SCHorseRegistration' === $Field) {
            Assert::that($value)->keyExists('Status')->keyExists('Year');
            Assert::that($value['Status'])->inArray(['Registered', 'NotRegistered']);
            Assert::that($value['Year'])->integer();
        }

        if ('SCHorseRegDiscipline' === $Field) {
            $value = [
                'Value' => Discipline::fromString($value)->getCode(),
            ];
        }

        if ('SCHorseRegDateFrom' === $Field) {
            $value = [
                'Value' => new \DateTimeImmutable($value),
            ];
        }

        if ('SCHorseRegDateTo' === $Field) {
            $value = [
                'Value' => new \DateTimeImmutable($value),
            ];
        }

        if ('SCHorseStudbook' === $Field) {
            $value = [
                'Value' => $value,
            ];
        }

        $this->Field = $Field;
        $this->Value = $value;
    }

    public function getSearchParameter(): \SoapVar
    {
        return new \SoapVar(
            $this->Value,
            SOAP_ENC_OBJECT,
            $this->Field,
            'http://fei.org/',
            'SCBase'
        );
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->Field;
    }

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->Value;
    }
}
