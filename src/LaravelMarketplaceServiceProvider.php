<?php

namespace VentureDrake\LaravelMarketplace;

use Illuminate\Support\ServiceProvider;
use VentureDrake\LaravelMarketplace\Commands\LaravelMarketplaceCommand;

class LaravelMarketplaceServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-marketplace.php' => config_path('laravel-marketplace.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-marketplace'),
            ], 'views');

            $migrationFileName = 'create_laravel_marketplace_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                LaravelMarketplaceCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-marketplace');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-marketplace.php', 'laravel-marketplace');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
