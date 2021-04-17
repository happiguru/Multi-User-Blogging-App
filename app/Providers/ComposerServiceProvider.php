<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog;
use App\Category;
use View;
use App\User;

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
        View::composer(['partials.meta_dynamic', 'layouts.nav','right-side-bar' ], function($view){
            $view->with('blogs', Blog::where('status', 1));
            $view->with('categories', Category::all());
            $view->with('users', User::all());
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
