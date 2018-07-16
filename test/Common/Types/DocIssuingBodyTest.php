<?php

namespace Test\Common\Types;

use FEIWebServicesClient\Common\Types\DocIssuingBody;
use PHPUnit\Framework\TestCase;

class DocIssuingBodyTest extends TestCase
{
    public function testCanBeCreatedWithAValidCode(): void
    {
        $this->assertInstanceOf(DocIssuingBody::class, new DocIssuingBody('BEL-FRBSE'));
    }

    public function testCannotBeCreatedWithAnInvalidCode(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The code you provide "TEST" is not a valid issuing body code');

        new DocIssuingBody('TEST');
    }
}
