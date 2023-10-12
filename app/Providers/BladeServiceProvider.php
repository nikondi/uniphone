<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('seo1', function ($expression) {
            echo '<pre style="background-color: #222222; color: #ffffff; padding: 12px 8px; border-radius: 3px; font-size: 14px; line-height: 1.3; margin: 15px;"><!-- dmp -->';
            var_dump($expression); // dmp
            echo '</pre>';
        });

    }
}
