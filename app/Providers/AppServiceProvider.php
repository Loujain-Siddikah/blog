<?php

namespace App\Providers;

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
        // app()->useLangPath(base_path('lang'));
        // schema::defaultStringLength(length: 191)
    }

//     public function boot()
// {
//     app()->useLangPath(base_path('lang'));

//     // or app()->useLangPath(app()->basePath('lang'));
// }
}