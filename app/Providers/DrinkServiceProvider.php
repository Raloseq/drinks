<?php

namespace App\Providers;

use App\Repository\DrinkRepository;
use App\Repository\DrinkRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class DrinkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DrinkRepositoryInterface::class,DrinkRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
