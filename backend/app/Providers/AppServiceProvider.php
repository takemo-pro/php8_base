<?php

namespace App\Providers;

use App\Enums\ApiMode;
use App\Http\Services\Api\IScheduleService;
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
        if(config('app.api_mode') === ApiMode::Concrete){
            $this->app->bind(IUserService::class,\App\Http\Services\Api\Concrete\UserService::class);
            $this->app->bind(IScheduleService::class,\App\Http\Services\Api\Concrete\ScheduleService::class);
        }else{
            $this->app->bind(IUserService::class,\App\Http\Services\Api\Mock\UserService::class);
            $this->app->bind(IScheduleService::class,\App\Http\Services\Api\Mock\ScheduleService::class);
        }
    }
}
