<?php

namespace Amohamed\Amsoap;

use Amohamed\Amsoap\Services\Amsoap;
use Illuminate\Support\ServiceProvider;

class SoapServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('amsoap', function () {
            return new Amsoap();
        });
    }
}
