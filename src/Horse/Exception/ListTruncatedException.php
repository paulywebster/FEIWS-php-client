<?php

namespace FEIWebServicesClient\Horse\Exception;

class ListTruncatedException extends \Exception
{
    public static function raise()
    {
        return new static('The returned list was truncated. You must add more criteria on your search');
    }
}
