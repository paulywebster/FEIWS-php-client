<?php

namespace FEIWebServicesClient\Common\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetSeasonList implements RequestInterface
{
    /**
     * @var string
     */
    private $DisciplineCode;

    /**
     * @var string
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $DisciplineCode)
    {
        if (!\in_array(strtoupper($DisciplineCode), ['S', 'D'])) {
            throw new \InvalidArgumentException(
                sprintf('The discipline code %s is not allowed.', $DisciplineCode)
            );
        }
        $this->DisciplineCode = strtoupper($DisciplineCode);
    }

    /**
     * @return string
     */
    public function getDisciplineCode(): string
    {
        return $this->DisciplineCode;
    }
}
