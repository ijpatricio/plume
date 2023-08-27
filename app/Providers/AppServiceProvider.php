<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Illuminate\Foundation\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentFabricator::registerStyles([
            app(Vite::class)('resources/sass/app.scss'), //vite
        ]);
    }
}
