<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use view;
class techforumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
            
            view()->composer('sections/side','App\Http\ViewComposers\PostComposer'           
            );

            view()->composer('viewpost={id}','App\Http\ViewComposers\PostComposer'           
            );
            $like=$this->app->request->all();

            View()->composer('viewpost={id}', function($view)
{

   $viewdata= $view->getData();
});



   
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
