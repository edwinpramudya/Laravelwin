<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\Kontak;
use Illuminate\Support\ServiceProvider;              // ← tambahkan ini

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
    public function boot(): void{
        View::composer('components.footer', function ($view){
            $view->with('kont', Kontak::first());
        });
    }
}
