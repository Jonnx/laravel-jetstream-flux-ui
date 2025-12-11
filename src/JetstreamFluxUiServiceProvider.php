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

        $this->publishes([
            __DIR__.'/../tailwind.config.js' => base_path('tailwind.config.js'),
            __DIR__.'/../vite.config.js' => base_path('vite.config.js'),
        ], 'jetstream-flux-ui-build-config');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
