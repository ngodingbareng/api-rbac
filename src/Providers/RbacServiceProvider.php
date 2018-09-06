<?php

namespace NgodingBareng\Providers;

use Illuminate\Support\ServiceProvider;

class RbacServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->loadMigrationsFrom(dirname(__DIR__) . '/migrations');
    }

    public function register()
    {
        parent::register();
    }
}
