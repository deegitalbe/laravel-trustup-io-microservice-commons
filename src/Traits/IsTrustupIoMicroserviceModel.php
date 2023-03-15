<?php

namespace Deegital\LaravelTrustupIoMicroserviceModel\Traits;

use Deegital\LaravelTrustupIoMicroserviceModel\Exceptions\LaravelTrustupIoMicroserviceModelException;
use Deegital\LaravelTrustupIoMicroserviceModel\Facades\LaravelTrustupIoMicroserviceModelFacade;
use Illuminate\Database\Eloquent\Relations\Relation;

trait IsTrustupIoMicroserviceModel
{
    public function getTrustupIoModelType(): string
    {
        Relation::requireMorphMap();

        return $this->getMorphClass();
    }

    public function getTrustupIoModelId(): string
    {
        return $this->uuid ?? $this->getIdentifierKey();
    }

    public function getTrustupIoAppKey(): string
    {
        return LaravelTrustupIoMicroserviceModelFacade::getConfig('app_key') ?? LaravelTrustupIoMicroserviceModelException::noAppKey();
    }
}
