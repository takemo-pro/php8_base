<?php

namespace App\Providers;

use App\Http\Services\Api\IUserService;
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
        if(config('app.api_mode') === 'concrete'){
            $this->app->bind(IUserService::class,\App\Http\Services\Api\Concrete\UserService::class);
        }else{
            $this->app->bind(IUserService::class,\App\Http\Services\Api\Mock\UserService::class);
        }
    }
}
