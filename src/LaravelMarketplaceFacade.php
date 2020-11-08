<?php

namespace VentureDrake\LaravelMarketplace;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VentureDrake\LaravelMarketplace\LaravelMarketplace
 */
class LaravelMarketplaceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-marketplace';
    }
}
