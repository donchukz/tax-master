<?php

namespace Pontian\TaxMaster;

use Illuminate\Support\ServiceProvider;

class TaxMasterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //publish tax migrations
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations')
        ], 'migrations');

        //publish tax seeders
        $this->publishes([
            __DIR__.'/../database/seeders' => database_path('seeders')
        ], 'seeders');
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
