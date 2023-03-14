<?php
namespace Deegital\LaravelTrustupIoMicroserviceModel;

use Deegital\LaravelTrustupIoMicroserviceModel\Contracts\LaravelTrustupIoMicroserviceModelContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class LaravelTrustupIoMicroserviceModel extends VersionablePackage implements LaravelTrustupIoMicroserviceModelContract
{
    public static function prefix(): string
    {
        return "laravel_trustup_io_microservice_model";
    }
}