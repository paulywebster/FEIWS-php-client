<?php

namespace FEIWebServicesClient;

class FEIWsdl
{
    public static function factory(Environment $environment, Service $service): string
    {
        return $environment->url().$service->uri();
    }
}
