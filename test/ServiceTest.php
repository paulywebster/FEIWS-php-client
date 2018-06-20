<?php

namespace Test;

use FEIWebServicesClient\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testReturnCorrectUrl(): void
    {
        $this->assertEquals('/Authentication.asmx?WSDL', Service::authentication()->uri());
        $this->assertEquals('/FEI/CommonWS.asmx?WSDL', Service::common()->uri());
        $this->assertEquals('/FEI/HorseWS.asmx?WSDL', Service::horse()->uri());
    }
}
