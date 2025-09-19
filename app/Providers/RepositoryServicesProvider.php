<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\AuthRepositoryInterface;
use App\Repositories\AuthRepository;
use App\Interfaces\FeedbackRepositoryInterface;
use App\Repositories\FeedbackRepository;
use App\Interfaces\FoodRepositoryInterface;
use App\Repositories\FoodRepository;

class RepositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class,AuthRepository::class);
        $this->app->bind(FeedbackRepositoryInterface::class,FeedbackRepository::class);
        $this->app->bind(FoodRepositoryInterface::class,FoodRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
