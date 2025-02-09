<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;
use App\Services\StorageService;
use App\Services\BalanceService;

class AppServiceProvider extends ServiceProvider{
    public function register(): void{
        $this->app->singleton(UserService::class, function ($app) {return new UserService();});
        $this->app->singleton(StorageService::class, function ($app) {return new StorageService();});
        $this->app->singleton(BalanceService::class, function ($app) {return new BalanceService();});
    }

    public function boot(): void{
        //
    }
}
