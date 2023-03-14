<?php
namespace Deegital\LaravelTrustupIoMicroserviceModel\Facades;

use Deegital\LaravelTrustupIoMicroserviceModel\LaravelTrustupIoMicroserviceModel;
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;

class LaravelTrustupIoMicroserviceModelFacade extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoMicroserviceModel::class;
    }
}