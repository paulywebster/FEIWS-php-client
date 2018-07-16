<?php

namespace FEIWebServicesClient\Common\Types;

class DocIssuingBody
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $CountryCode;

    public function __construct(string $code)
    {
        $foundCode = array_filter(
            $this->getList(),
            function ($item) use ($code) {
                return $item['Code'] === $code;
            }
        );

        if (empty($foundCode)) {
            throw new \InvalidArgumentException(
                sprintf('The code you provide "%s" is not a valid issuing body code', $code)
            );
        }

        $this->Code = end($foundCode)['Code'];
        $this->Name = end($foundCode)['Name'];
        $this->CountryCode = Country::create(end($foundCode)['CountryCode'])->getCode();
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
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    public function getList(): array
    {
        return require __DIR__.'/../Resources/DocIssuingBodyList.php';
    }
}
