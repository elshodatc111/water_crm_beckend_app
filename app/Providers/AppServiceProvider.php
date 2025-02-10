<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\BalanceService;
use App\Services\StorageHistoryService;
use App\Services\StorageOutputService;
use App\Services\StorageService;
use App\Services\UserService;

class AppServiceProvider extends ServiceProvider{
    public function register(): void{
        $this->app->singleton(BalanceService::class, function ($app) {return new BalanceService();});
        $this->app->singleton(StorageHistoryService::class, function ($app) {return new StorageHistoryService();});
        $this->app->singleton(StorageOutputService::class, function ($app) {return new StorageOutputService();});
        $this->app->singleton(StorageService::class, function ($app) {return new StorageService();});
        $this->app->singleton(UserService::class, function ($app) {return new UserService();});
    }

    public function boot(): void{
        //
    }
}
