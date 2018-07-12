<?php

namespace FEIWebServicesClient\Common\Types;

use Assert\Assert;
use Symfony\Component\Intl\Intl;

class Country
{
    private const TYPE_ISO_NUMERIC = 'ISONumeric';
    private const TYPE_ISO_ALPHA = 'ISOAlpha';
    private const TYPE_FEI_CODE = 'Code';
    private const TYPE_LABEL = 'Label';

    /**
     * @var int
     */
    private $ISONumeric;

    /**
     * @var string
     */
    private $ISOAlpha;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Label;

    private function __construct(array $country)
    {
        $this->ISONumeric = $country['ISONumeric'];
        $this->ISOAlpha = $country['ISOAlpha'];
        $this->Code = $country['Code'];
        $this->Label = $country['Label'];
    }

    public static function create($countryString): self
    {
        $country = [];
        if (\is_int($countryString)) {
            $country = self::getCountryByType($countryString, self::TYPE_ISO_NUMERIC);
        }

        if (2 === \strlen($countryString)) {
            Assert::that($countryString)->regex('#[A-Z]{2}#');
            $country = self::getCountryByType($countryString, self::TYPE_ISO_ALPHA);
        }

        if (3 === \strlen($countryString)) {
            Assert::that($countryString)->regex('#[A-Z]{3}#');
            $country = self::getCountryByType($countryString, self::TYPE_FEI_CODE);
        }

        if (\strlen($countryString) > 3) {
            $countryList = Intl::getRegionBundle()->getCountryNames();
            if (\in_array($countryString, $countryList, true)) {
                $country = self::getCountryByType(array_search($countryString, $countryList, true), self::TYPE_ISO_ALPHA);
            } else {
                $country = self::getCountryByType($countryString, self::TYPE_LABEL);
            }
        }

        return new self($country);
    }

    private static function getCountryByType(string $countryString, string $type): array
    {
        $countryList = require __DIR__.'/../Ressources/CountryList.php';

        if (self::TYPE_ISO_NUMERIC === $type) {
            $countryString = (int) $countryString;
        }

        foreach ($countryList as $country) {
            if ($countryString === $country[$type]) {
                return $country;
            }
        }

        throw new \InvalidArgumentException('Cannot defined the country.');
    }

    /**
     * @return int
     */
    public function getISONumeric(): int
    {
        return $this->ISONumeric;
    }

    /**
     * @return string
     */
    public function getISOAlpha(): string
    {
        return $this->ISOAlpha;
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
}
