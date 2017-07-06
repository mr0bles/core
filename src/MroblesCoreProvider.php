<?php

namespace Mrobles\Core;

use Illuminate\Support\ServiceProvider;

class MroblesCoreProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Da nombre a la ruta interna
        $this->loadViewsFrom(__DIR__.'/views', 'vistas');

        // Copia al hacer publish
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/mrobles/core'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Registra en la aplicacion principal
        include __DIR__.'/routes.php';
        $this->app->make('Mrobles\Core\GenericoController');
    }
}
