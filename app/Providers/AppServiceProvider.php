<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\ThemeInfo;
use App\Models\Tex;

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
        // View::composer('*', function($view){
        //     $view->with('categories', Category::where('status',1)->get());
        // });
        View::composer('*', function($view){
            $view->with('testimonials', Testimonial::all());
        });
        View::composer('*', function($view){
            $view->with('themeInfos', ThemeInfo::where('id',1)->get());
        });

        View::composer('*', function($view){
            $view->with('currencys', Tex::where('id',1)->get());
        });
    }
}
