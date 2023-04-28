<?php

namespace Amohame\Amsoap;

use Amohamed\Amsoap\Services\Amsoap;
use Illuminate\Support\ServiceProvider;

class SoapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // $this->app->bind('amsoap', function () {

        //     return new Amsoap();
        // });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('amsoap', function () {

            return new Amsoap();
        });
    }
}