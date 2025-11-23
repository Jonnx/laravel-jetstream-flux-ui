<?php

namespace JetstreamFluxUi;

use Illuminate\Support\ServiceProvider;

class JetstreamFluxUiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views'),
            __DIR__.'/../resources/css' => resource_path('css'),
        ], 'jetstream-flux-ui-views');

    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
