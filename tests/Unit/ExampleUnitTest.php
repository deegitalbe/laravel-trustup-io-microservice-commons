<?php
namespace Deegital\LaravelTrustupIoMicroserviceModel\Tests\Unit;

use Deegital\LaravelTrustupIoMicroserviceModel\Tests\TestCase;
use Deegital\LaravelTrustupIoMicroserviceModel\Facades\LaravelTrustupIoMicroserviceModelFacade;

class ExampleUnitTest extends TestCase
{
    public function test_it_can_instanciate_facade()
    {
        $this->assertInstanceOf(
            LaravelTrustupIoMicroserviceModelFacade::class,
            $this->app->make(LaravelTrustupIoMicroserviceModelFacade::class)
        );
    }
}