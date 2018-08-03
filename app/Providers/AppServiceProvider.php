<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Menu;
use App\Category;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $collection = collection ([
//            ['name' => 'orders', 'link' => ''],
//            ['name' => 'goods', 'link' => 'admin/goods'],
//        ]);

//        view()->composer('includes.menu', function ($view){
//            $view->with('collection', Menu::all());
//
//        });
        View::composer('includes.headerMenu', function ($view){
            $view->with('categories', Category::where('parent_id', 0)->get());

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
