<?php

namespace Deegital\LaravelTrustupIoMicroserviceModel\Exceptions;

use Exception;

class LaravalTrustupIoMicroserviceModelException extends Exception
{
    public static function noAppKey()
    {
        throw new Exception("No app_key defined in config");
    }
}
