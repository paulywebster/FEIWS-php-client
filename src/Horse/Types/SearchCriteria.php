<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assert;
use Assert\Assertion;
use FEIWebServicesClient\Common\Types\Discipline;
use FEIWebServicesClient\Common\Types\NationalFederation;
use FEIWebServicesClient\Common\Types\Country;

class SearchCriteria
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
            'AnyID',
            'AnyName',
            'InclHistNames',
            'Pony',
            'CurrentOwner',
            'HorseStatus',
            'AdminNF',
            'PendAdmNFReq',
            'Registration',
            'RegYear',
            'RegDiscipline',
            'RegDateFrom',
            'RegDateTo',
            'StudbookCode',
        ];
    }

    public function __construct(string $Field, $Value)
    {
        Assertion::inArray($Field, self::getFieldList());

        if ('InclHistNames' === $Field) {
            Assertion::boolean($Value);
            $Value = $Value ? 'true' : 'false';
        }

        if ('Pony' === $Field) {
            Assert::that($Value)->integer()->inArray([1, 2, 3]);
            $Value = (string) $Value;
        }

        if ('HorseStatus' === $Field) {
            Assert::that($Value)->integer()->inArray([0, 1, 2, 3, 9, 10]);
            $Value = (string) $Value;
        }

        if ('AdminNF' === $Field) {
            $Value = (string) new NationalFederation(Country::create($Value));
        }

        if ('PendAdmNFReq' === $Field) {
            $Value = (string) new NationalFederation(Country::create($Value));
        }

        if ('Registration' === $Field) {
            // The value "1 : Search for all horses" is volontary removed to avoid misunderstood filtering
            // The others registration filters 'RegYear','RegDiscipline','RegDateFrom','RegDateTo' do not work when Registration is set to one
            Assert::that($Value)->integer()->inArray([2, 3]);
            $Value = (string) $Value;
        }

        if ('RegYear' === $Field) {
            Assert::that($Value)->integer();
            $Value = (string) $Value;
        }

        if ('RegDiscipline' === $Field) {
            $discipline = Discipline::fromString($Value);
            $Value = $discipline->getCode();
        }

        if ('RegDateFrom' === $Field || 'RegDateTo' === $Field) {
            $date = new \DateTimeImmutable($Value);
            $Value = $date->format('Y-m-d\TH:i:s');
        }

        Assert::that($Value)->string()->notBlank();

        $this->Field = $Field;
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->Field;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
}
