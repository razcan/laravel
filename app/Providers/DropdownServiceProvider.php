<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\DemoOne;


class DropdownServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('App\Library\Services\DemoOne', function ($app) {
            return new DemoOne();
          });

        // view()->composer('*', function ($view)  {
        //     $test = 'My test';
        //     return $view->with('test', $test);
        //     });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('*', function ($view)  {
        //     $test = 'My test';
        //     return $view->with('test', $test);
        //     });
    }
}
