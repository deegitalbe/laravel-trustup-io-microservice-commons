<?php

namespace Deegital\LaravelTrustupIoMicroserviceModel\Providers;

use Deegital\LaravelTrustupIoMicroserviceModel\LaravelTrustupIoMicroserviceModel;
use Exception;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class LaravelTrustupIoMicroserviceModelServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoMicroserviceModel::class;
    }

    protected function addToRegister(): void
    {
        //
    }

    protected function addToBoot(): void
    {
    }
}
