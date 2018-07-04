<?php

namespace FEIWebServicesClient\Horse\Types;

use FEIWebServicesClient\Common\Types\Discipline;
use Phpro\SoapClient\Type\RequestInterface;

class RegisterHorse implements RequestInterface
{
    private const LIMIT_REGISTRATION_FOR_NEXT_YEAR = 'P6W';

    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var int
     */
    private $Year;

    /**
     * @var []Discipline
     */
    private $DisciplineCodes;

    public function __construct(HorseFEICode $HorseFEICode, int $Year, array $DisciplineCodes, \DateTimeImmutable $registrationDate)
    {
        $this->HorseFEICode = $HorseFEICode;

        $currentYear = (int) $registrationDate->format('Y');

        if ($Year !== $currentYear) {
            if ($Year < $currentYear) {
                throw new \InvalidArgumentException(sprintf('The time limit for registration for the year %s is expired.', $Year));
            }
            $sixWeeksAfterRegistration = $registrationDate->add(new \DateInterval(self::LIMIT_REGISTRATION_FOR_NEXT_YEAR));
            if (($Year > $currentYear + 1) || ($Year === $currentYear + 1 && $sixWeeksAfterRegistration < new \DateTimeImmutable('first day of january next year'))) {
                throw new \InvalidArgumentException('A registration may not be made more than a few weeks in advance. Currently this is set at 6 weekds, but this is subject to review.');
            }
        }

        $this->Year = $Year;
        foreach ($DisciplineCodes as $disciplineCode) {
            $this->DisciplineCodes[] = Discipline::fromString($disciplineCode)->getCode();
        }
    }

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->Year;
    }

    /**
     * @return array
     */
    public function getDisciplineCodes(): array
    {
        return $this->DisciplineCodes;
    }
}
