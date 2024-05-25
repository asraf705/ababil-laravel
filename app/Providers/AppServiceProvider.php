<?php

namespace App\Providers;

use App\Models\ProductPrice;
use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\ThemeInfo;
use App\Models\Tex;
use Cart;
use Session;
use App\Models\Customer;


use function Nette\Utils\first;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('customerInfo', Customer::find(Session::get('customer_id')));
        });

        View::composer('*', function ($view) {
            $view->with('testimonials', Testimonial::all());
        });

        View::composer('*', function ($view) {
            $view->with('themeInfos', ThemeInfo::where('id', 1)->get());
        });

        View::composer('*', function ($view) {
            $view->with('currencys', Tex::where('id', 1)->get());
        });

        View::composer('*', function ($view) {
            $view->with('prices', ProductPrice::where('id', 1)->get());
        });
    }
}
