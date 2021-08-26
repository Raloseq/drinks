<?php

namespace App\Providers;

use App\Repository\IngredientRepository;
use App\Repository\IngredientRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class IngredientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IngredientRepositoryInterface::class,IngredientRepository::class);
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
