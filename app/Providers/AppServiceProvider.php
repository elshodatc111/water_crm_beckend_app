<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class AppServiceProvider extends ServiceProvider{
    public function register(): void{
        $this->app->singleton(UserService::class, function ($app) {
            return new UserService();
        });
    }

    public function boot(): void{
        //
    }
}
