<?php

namespace App\Providers;

use App\Models\Navbar;
use App\Models\Topbar;
use App\Models\Photonav;
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
        view()->composer('*', function ($view)
        {            
            $topbar = Topbar::first();            
            $navbar = Navbar::all();            
            $photoNav = Photonav::first();            
            $view->with('topbar', $topbar )                
            ->with('navbar', $navbar )                
            ->with('photoNav', $photoNav); 
       });
    }
}
