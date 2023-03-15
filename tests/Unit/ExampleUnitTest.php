<?php

namespace Deegital\LaravelTrustupIoMicroserviceModel\Tests\Unit;

use Deegital\LaravelTrustupIoMicroserviceModel\Exceptions\LaravelTrustupIoMicroserviceModelException;
use Deegital\LaravelTrustupIoMicroserviceModel\Tests\TestCase;
use Deegital\LaravelTrustupIoMicroserviceModel\Facades\LaravelTrustupIoMicroserviceModelFacade;
use Deegital\LaravelTrustupIoMicroserviceModel\Tests\Models\Client;
use Exception;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Config;

class ExampleUnitTest extends TestCase
{
    public function test_it_can_instanciate_facade()
    {
        $this->assertInstanceOf(
            LaravelTrustupIoMicroserviceModelFacade::class,
            $this->app->make(LaravelTrustupIoMicroserviceModelFacade::class)
        );
    }

    public function test_it_can_get_model_id()
    {
        /** @var Client */
        $client = Client::factory()->make();

        $this->assertEquals($client->uuid, $client->getTrustupIoModelId());
    }

    public function test_it_can_get_model_type()
    {
        /** @var Client */
        $client = Client::factory()->make();

        Relation::morphMap([
            'my_type' => 'Deegital\LaravelTrustupIoMicroserviceModel\Tests\Models\Client'
        ]);

        $this->assertEquals('my_type', $client->getTrustupIoModelType());
    }

    public function test_it_can_get_app_key()
    {
        /** @var Client */
        $client = Client::factory()->make();

        LaravelTrustupIoMicroserviceModelFacade::setConfig('app_key', 'my_app_key');

        $this->assertEquals('my_app_key', $client->getTrustupIoAppKey());
    }

    public function test_app_key_case_error()
    {
        /** @var Client */
        $client = Client::factory()->make();

        LaravelTrustupIoMicroserviceModelFacade::setConfig('app_key', null);

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('No app_key defined in config');


        $client->getTrustupIoAppKey();
    }
}
