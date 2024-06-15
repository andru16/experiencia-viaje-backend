<?php

namespace App\Providers;

use App\Interfaces\PaisesCiudades\PaisesCiudadesInterface;
use App\Services\CiudadesPaises\PaisesCiudadesServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PaisesCiudadesInterface::class, PaisesCiudadesServices::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
