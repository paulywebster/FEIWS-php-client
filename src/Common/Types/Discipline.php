<?php

namespace FEIWebServicesClient\Common\Types;

use Assert\Assertion;

class Discipline
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Label;

    /**
     * @var bool
     */
    private $IsParaEquestrian;

    private static $disciplineList = [
        'A' => 'Driving',
        'C' => 'Eventing',
        'D' => 'Dressage',
        'E' => 'Endurance',
        'PEA' => 'Para-Equestrian Driving',
        'PED' => 'Para-Equestrian Dressage',
        'R' => 'Reining',
        'S' => 'Jumping',
        'V' => 'Vaulting',
    ];

    private static $paraEquestrianDisciplineList = [
        'PEA',
        'PED',
    ];

    public static function fromString(string $string): self
    {
        Assertion::inArray(
            $string,
            array_merge(self::$disciplineList, array_keys(self::$disciplineList))
        );

        $discipline = new self();
        if (array_key_exists($string, self::$disciplineList)) {
            $discipline->Code = $string;
            $discipline->Label = self::$disciplineList[$string];
        } elseif ($code = array_search($string, self::$disciplineList)) {
            $discipline->Code = $code;
            $discipline->Label = $string;
        }

        $discipline->IsParaEquestrian = \in_array($discipline->Code, self::$paraEquestrianDisciplineList);

        return $discipline;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->Label;
    }

    /**
     * @return bool
     */
    public function isParaEquestrian(): bool
    {
        return $this->IsParaEquestrian;
    }
}
