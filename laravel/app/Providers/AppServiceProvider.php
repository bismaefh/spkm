<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

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
        $this->register();
        
        \Gate::define('admin', function ($user) {
            if ($user->role == 'admin') {
                return true;
            }
            return false;
        });
        
        \Gate::define('mahasiswa', function ($user) {
            if ($user->role == 'mahasiswa') {
                return true;
            }
            return false;
        });
        
        \Gate::define('kemahasiswaan', function ($user) {
            if ($user->role == 'kemahasiswaan') {
                return true;
            }
            return false;
        });
    }
   
}
