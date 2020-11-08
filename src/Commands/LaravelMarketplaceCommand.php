<?php

namespace VentureDrake\LaravelMarketplace\Commands;

use Illuminate\Console\Command;

class LaravelMarketplaceCommand extends Command
{
    public $signature = 'laravel-marketplace';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
