<?php

namespace App\Providers;

use App\View\Components\Forms\InputText;
use App\View\Components\Navigation;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component('navigation', Navigation::class);
    }
}
