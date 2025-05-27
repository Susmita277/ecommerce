<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Panel;
use Filament\PanelProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
    public function login (){
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Only general app bootstrapping here
        // Filament-specific configuration should be in AdminPanelProvider
    }
}