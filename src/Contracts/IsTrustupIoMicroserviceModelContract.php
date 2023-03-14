<?php

namespace Deegital\LaravelTrustupIoMicroserviceModel\Contracts;

interface IsTrustupIoMicroserviceModelContract
{
    public function getTrustupIoModelType(): string;

    public function getTrustupIoModelId(): string;

    public function getTrustupIoAppKey(): string;
}
