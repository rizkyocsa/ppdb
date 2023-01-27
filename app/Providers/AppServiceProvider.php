<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::if('admin', function () {
            return auth()->user() && $user->roles_id == 1;
        });
        Blade::if('mahasiswa', function () {
            return auth()->user() && $user->roles_id == 2;
        });
        Blade::if('user', function () {
            return auth()->user() && $user->roles_id == 3;
        });
    }
}
