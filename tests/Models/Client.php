<?php

namespace Deegital\LaravelTrustupIoMicroserviceModel\Tests\Models;

use Deegital\LaravelTrustupIoMicroserviceModel\Contracts\IsTrustupIoMicroserviceModelContract;
use Deegital\LaravelTrustupIoMicroserviceModel\Tests\Factories\Models\ClientFactory;
use Deegital\LaravelTrustupIoMicroserviceModel\Traits\IsTrustupIoMicroserviceModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model implements IsTrustupIoMicroserviceModelContract
{
    use IsTrustupIoMicroserviceModel, HasFactory;

    protected $fillable = ["uuid", "name"];

    protected static function newFactory()
    {
        return ClientFactory::new();
    }
}
