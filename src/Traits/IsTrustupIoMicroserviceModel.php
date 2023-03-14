<?php

namespace Deegital\LaravelTrustupIoMicroserviceModel\Traits;

use Deegital\LaravelTrustupIoMicroserviceModel\Exceptions\LaravalTrustupIoMicroserviceModelException;
use Deegital\LaravelTrustupIoMicroserviceModel\Facades\LaravelTrustupIoMicroserviceModelFacade;
use Illuminate\Database\Eloquent\Relations\Relation;

trait IsTrustupIoMicroserviceModel
{
    public function getTrustupIoModelType(): string
    {
        Relation::requireMorphMap();

        return $this->getMorphType();
    }

    public function getTrustupIoModelId(): string
    {
        return $this->uuid ?? $this->getIdentifierKey();
    }

    public function getTrustupIoAppKey(): string
    {
        LaravelTrustupIoMicroserviceModelFacade::getConfig('app_key') ?? LaravalTrustupIoMicroserviceModelException::noAppKey();
    }
}
