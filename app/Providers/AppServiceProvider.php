<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Hospital;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $hospitals = Hospital::where('status', 1)->get();
        $doctors = User::with('category', 'hospital')->where('role', 'doctors')->where('status', '=', 'active')->get();
        View::share('hospitals', $hospitals);
        View::share('doctors', $doctors);
    }
}
