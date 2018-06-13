<?php

namespace FEIWebServicesClient;

class Service
{
    private const AUTHENTICATION = 'authentication';
    private const COMMON = 'common';

    private const AUTHENTICATION_SERVICE_URI = '/Authentication.asmx?WSDL';
    private const COMMON_SERVICE_URI = '/FEI/CommonWS.asmx?WSDL';

    private $service;

    public static function list(): array
    {
        return [
            self::AUTHENTICATION,
            self::COMMON,
        ];
    }

    private function __construct(string $service)
    {
        $this->service = $service;
    }

    public static function authentication(): self
    {
        return new self(self::AUTHENTICATION);
    }

    public static function common(): self
    {
        return new self(self::COMMON);
    }

    public function name(): string
    {
        return $this->service;
    }

    public function uri(): string
    {
        if (self::AUTHENTICATION === $this->service) {
            return self::AUTHENTICATION_SERVICE_URI;
        }

        if (self::COMMON === $this->service) {
            return self::COMMON_SERVICE_URI;
        }

        throw new \Exception(sprintf('The service "%s" does not exist.', $this->service));
    }
}
