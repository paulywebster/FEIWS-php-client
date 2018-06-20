<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetLeagueList implements RequestInterface
{
    private const SEASON_CODE_FORMAT = '#^20\d{2}/\d{2}$#';
    /**
     * @var string
     */
    private $DisciplineCode;

    /**
     * @var string
     */
    private $SeasonCode;

    /**
     * @var string
     * @var string $SeasonCode
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $DisciplineCode, string $SeasonCode)
    {
        if (!\in_array(strtoupper($DisciplineCode), ['S', 'D'])) {
            throw new \InvalidArgumentException(sprintf('The discipline code %s is not allowed.', $DisciplineCode));
        }

        if (!preg_match(self::SEASON_CODE_FORMAT, $SeasonCode)) {
            throw new \InvalidArgumentException(sprintf('The season code %s does not match the required format.', $SeasonCode));
        }
        $this->DisciplineCode = strtoupper($DisciplineCode);
        $this->SeasonCode = $SeasonCode;
    }

    /**
     * @return string
     */
    public function getDisciplineCode(): string
    {
        return $this->DisciplineCode;
    }

    /**
     * @return string
     */
    public function getSeasonCode(): string
    {
        return $this->SeasonCode;
    }
}
