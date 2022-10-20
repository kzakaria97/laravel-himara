<?php

namespace App\Providers;

use App\Models\TopBar;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function ($view){            
            $topbar = TopBar::first();            
            // $footer = Footer::first();                        
            $view->with('topbar', $topbar );              
            // ->with('footer', $footer )                
         });
    }
}
