<?php

namespace Madan\Dcrud;

use Illuminate\Support\ServiceProvider;

class DcrudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'dcrud');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/dcrud'),
        ]);
        $this->publishes([
        __DIR__ . '/views/resources/js' =>
        resource_path('assets/vendor/dcrud'
        )], 'vue-components');
        $this->publishes([
        __DIR__.'/config/dcrud.php' => config_path('dcrud.php'),
    ]);
    }
}
