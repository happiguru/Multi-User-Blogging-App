<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog;
use App\Category;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer(['partials.meta_dynamic', 'layouts.nav'], function($view){
            $view->with('blogs', Blog::where('status', 1));
            $view->with('categories', Category::all());
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
