<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Expertise;
use Illuminate\Support\Facades\Blade;
use Symfony\Component\Routing\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('routeis', function ($expression) {
            return fnmatch($expression, Route::currentRouteName());
        });
        view()->composer('*', function($view){
            $view->with('expertisess', Expertise::where('parent_id',null)->get());
           
        });
    }
}
