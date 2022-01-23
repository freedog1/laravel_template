<?php

namespace App\Providers;

use App\Domain\Repositories\TempRepository;
use App\Infrastructure\RepositoriesImpl\TempRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(TempRepository::class, function($app){
            return new TempRepositoryImpl();

        });
    }
}
