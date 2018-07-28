<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Menu;

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

//        $collection =
        view()->composer('includes.menu', function ($view){
            $view->with('collection', Menu::all());

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
