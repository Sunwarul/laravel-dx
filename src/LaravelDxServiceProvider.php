<?php

namespace Sunwarul\LaravelDx;

use Illuminate\Support\ServiceProvider;
use Sunwarul\LaravelDx\Commands\ApiListCommand;

class LaravelDxServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->commands([
                ApiListCommand::class,
            ]);
        }

        $this->loadRoutesFrom(__DIR__ . './Routes/web.php');
        $this->loadViewsFrom(__DIR__ . './Views', 'laravel-dx');
    }
}
