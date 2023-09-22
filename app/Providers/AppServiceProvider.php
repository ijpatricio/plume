<?php

namespace App\Providers;

use Illuminate\Foundation\Application;
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
        $this->registerRoutePatterForPublicPages();
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

    private function registerRoutePatterForPublicPages()
    {
        $this->app->bind('subdomain-hostname', function (Application $app) {
            if ($app->environment('local')) {
                return '{handle}.plume.test';
            }
            return '{handle}.busque.dev';
        });
    }
}
