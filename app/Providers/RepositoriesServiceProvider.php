<?php

namespace App\Providers;

use App\Repositories\NarudzbaRepositoryInterface; 
use App\Repositories\NarudzbaRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NarudzbaRepositoryInterface::class, NarudzbaRepository::class);
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
