<?php
namespace Deegital\LaravelTrustupIoMicroserviceModel\Tests;

use Deegital\LaravelTrustupIoMicroserviceModel\LaravelTrustupIoMicroserviceModel;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Deegital\LaravelTrustupIoMicroserviceModel\Providers\LaravelTrustupIoMicroserviceModelServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoMicroserviceModel::class;
    }

    public function getEnvironmentSetUp($app)
    {
        $this->loadMigrations();
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupIoMicroserviceModelServiceProvider::class
        ];
    }

    protected function loadMigrations()
    {
        foreach($this->getMigrations() as $migration):
            app()->make($migration)->up();
        endforeach;
    }

    /**
     * Define your migrations files here.
     * 
     * @return array<int, string> 
     */
    protected function getMigrations(): array
    {
        return [];
    }
}