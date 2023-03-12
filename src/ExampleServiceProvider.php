<?php

namespace Pontian\TaxMaster;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Migrations example.
        $this->publishes([
            __DIR__.'/../../database/migrations' => database_path('migrations')
        ], 'migrations');

//        // Configuration example.
//        // `config` is the tag.
//        $this->publishes([
//            __DIR__.'config/example.php' => config_path('example.php')
//        ], 'config');
//
//        // Public assets example.
//        // `public` is the tag.
//        $this->publishes([
//            __DIR__.'example/assets' => public_path('vendor/example')
//        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
