<?php

namespace HelloPlugin;

use Illuminate\Support\ServiceProvider;

class HelloPluginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/Views', 'HelloPlugin');
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Publish views if needed
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/HelloPlugin'),
        ], 'views');
    }
}

?>