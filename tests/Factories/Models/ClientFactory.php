<?php

namespace Deegital\LaravelTrustupIoMicroserviceModel\Tests\Factories\Models;

use Deegital\LaravelTrustupIoMicroserviceModel\Tests\Models\Client;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            "uuid" => $this->faker->uuid(),
            "name" => $this->faker->name(),
        ];
    }
}
