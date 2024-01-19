<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\AnnualLeaveRepository;
use App\Repository\AnnualLeaveRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AnnualLeaveRepositoryInterface::class, AnnualLeaveRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
