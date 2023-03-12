<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AutocompleteSearchServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('AutocompleteSearchServicesProvider', function () {
            return new \App\Services\AutocompleteSearch\AutocompleteSearch();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
