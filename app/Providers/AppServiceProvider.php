<?php

namespace App\Providers;

use Laravel\Passport\Passport;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Remove data from json obj
        Resource::withoutWrapping();
    
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Passport::routes();
    }
}
