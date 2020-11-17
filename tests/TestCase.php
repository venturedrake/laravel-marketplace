<?php

namespace VentureDrake\LaravelMarketplace\Tests;

/*use Illuminate\Database\Eloquent\Factories\Factory;*/
use Orchestra\Testbench\TestCase as Orchestra;
use VentureDrake\LaravelMarketplace\LaravelMarketplaceServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        /* Factory::guessFactoryNamesUsing(
             function (string $modelName) {
                 return 'VentureDrake\\LaravelMarketplace\\Database\\Factories\\' . class_basename($modelName) . 'Factory';
             }
         );*/
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelMarketplaceServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        /*
        include_once __DIR__.'/../database/migrations/create_laravel_marketplace_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
