<?php

namespace Dearmadman\Tbk;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use Dearmadman\Tbk\TbkManager;
use Dearmadman\Tbk\Contracts\Factory;

class TbkServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is defered.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__. '/Config/tbk.php' => config_path('tbk.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return new TbkManager($app['config']['tbk'], new Client());
        });
    }

     /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Factory::class];
    }

}
