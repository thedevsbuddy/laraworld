<?php

namespace Devsbuddy\Laraworld;

use Devsbuddy\Laraworld\Console\ImportData;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaraworldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /**
         * Load views and routes
         */
        $this->loadViewsFrom(__DIR__ . '/../views', 'laraworld');
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');

        if ($this->app->runningInConsole()) {
            // Publishing assets.
            $this->publishes([
                __DIR__ . '/../assets' => public_path('vendor/laraworld'),
            ], 'laravel-assets');

            // Registering package commands.
            $this->commands([
                ImportData::class,
            ]);
        }

        // Register Blade directive
        Blade::directive('laraworldScripts', function () {
            return "<?php echo \$__env->make('laraworld::laraworld-scripts')->render(); ?>";
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laraworld', function () {
            return new Laraworld;
        });
    }
}
