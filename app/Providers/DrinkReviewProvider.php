<?php

namespace App\Providers;

use App\Repository\DrinkReviewRepository;
use App\Repository\DrinkReviewRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class DrinkReviewProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DrinkReviewRepositoryInterface::class,DrinkReviewRepository::class);
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
