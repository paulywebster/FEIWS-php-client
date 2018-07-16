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

    public static function fromString(string $string): self
    {
        Assertion::inArray($string, array_merge(self::getLabelList(), self::getCodeList()));

        foreach (self::getList() as $disciplineItem) {
            if ($string === $disciplineItem['Code'] || $string === $disciplineItem['Label']) {
                $discipline = new self();
                $discipline->Code = $disciplineItem['Code'];
                $discipline->Label = $disciplineItem['Label'];
                $discipline->IsParaEquestrian = $disciplineItem['IsParaEquestrian'];

                return $discipline;
            }
        }
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

    public static function getCodeList(): array
    {
        $codeList = [];

        foreach (self::getList() as $discipline) {
            $codeList[] = $discipline['Code'];
        }

        return $codeList;
    }

    public static function getLabelList(): array
    {
        $labelList = [];

        foreach (self::getList() as $discipline) {
            $labelList[] = $discipline['Label'];
        }

        return $labelList;
    }

    public static function getList(): array
    {
        return require __DIR__.'/../Resources/DisciplineList.php';
    }
}
