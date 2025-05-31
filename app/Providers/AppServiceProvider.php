<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Panel;
use Filament\PanelProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;

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
        View::composer('components.layouts.partials.app', function ($view) {
        $view->with('categories', Category::all());
    });
    }
}