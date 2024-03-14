<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use view;
class navServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
            
            view()->composer('sections/nav','App\Http\ViewComposers\CategoryComposer'            
            );
   
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
