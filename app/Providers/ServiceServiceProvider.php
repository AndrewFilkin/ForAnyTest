<?php

namespace App\Providers;

use App\Services\CreateShortLink\GenerateShortLinkService;
use App\Contracts\GenerateShortLinkContract;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    public $bindings = [
        GenerateShortLinkContract::class => GenerateShortLinkService::class
    ];
}
