<?php

namespace Toniperic\Kittens;

class KittensServiceProvider extends \Illuminate\Support\ServiceProvider
{

    protected $defer = true;

    public function boot()
    {
        $this->commands([
            'Toniperic\Kittens\Commands\MeowCommand',
            'Toniperic\Kittens\Commands\MeowListCommand'
        ]);
    }

    public function register()
    {
        $this->app->bind('kittens', function ($app) {
            return new Factory($app['files']);
        });
    }
}
