<?php

namespace FEIWebServicesClient;

class Environment
{
    private const INTEGRATION = 'integration';
    private const VALIDATION = 'validation';
    private const PRODUCTION = 'production';

    private const INTEGRATION_URL = 'https://idata.fei.org/_vti_bin';
    private const VALIDATION_URL = 'https://vdata.fei.org/_vti_bin';
    private const PRODUCTION_URL = 'https://data.fei.org/_vti_bin';

    private $environment;

    private static function getList(): array
    {
        return [
            self::INTEGRATION,
            self::VALIDATION,
            self::PRODUCTION,
        ];
    }

    private function __construct(string $environment)
    {
        if (!\in_array($environment, self::getList())) {
            throw new \InvalidArgumentException(sprintf('The environment "%s" does not exist', $environment));
        }

        $this->environment = $environment;
    }

    public static function fromString(string $environment): self
    {
        return new self($environment);
    }

    public static function integration(): self
    {
        return new self(self::INTEGRATION);
    }

    public static function validation(): self
    {
        return new self(self::VALIDATION);
    }

    public static function production(): self
    {
        return new self(self::PRODUCTION);
    }

    public function name(): string
    {
        return $this->environment;
    }

    public function url(): string
    {
        if (self::INTEGRATION === $this->environment) {
            return self::INTEGRATION_URL;
        }
        if (self::VALIDATION === $this->environment) {
            return self::VALIDATION_URL;
        }

        return self::PRODUCTION_URL;
    }
}
