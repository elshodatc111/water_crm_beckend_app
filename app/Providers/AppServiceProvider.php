<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;
use App\Services\StorageService;

class AppServiceProvider extends ServiceProvider{
    public function register(): void{
        $this->app->singleton(UserService::class, function ($app) {
            return new UserService();
        });
        $this->app->singleton(StorageService::class, function ($app) {
            return new StorageService();
        });
    }

    public function boot(): void{
        //
    }
}
