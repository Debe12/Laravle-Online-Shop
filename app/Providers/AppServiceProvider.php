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
        view()->composer('partials.language_switcher', function($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locals', config('app.available_locales'));

        });
        //
        view()->composer("partials.language_switcher", function ($view) {
            $view->with('current_local',app()->getLocale());
            $view->with('current_local',config('app.available_locales'));
    });

}
}
