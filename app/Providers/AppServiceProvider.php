<?php

namespace App\Providers;

use App\Models\PageHitCounter;
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
        view()->composer('layouts.guestlayout', function ($view) {
            $view->with('pagehits', PageHitCounter::find(1)->value('home_page_counter'));
        });
    }
}
