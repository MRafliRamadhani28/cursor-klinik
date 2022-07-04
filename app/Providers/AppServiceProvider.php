<?php

namespace App\Providers;

use App\Models\Fitur;
use App\Models\FiturDetail;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
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
        $fitur = Fitur::find(1);
        $detail = $fitur->fiturdetail;

        view()->share('fiturs', Fitur::all());
        view()->share('fitur_dtl', $detail);


        // view()->composer(
        //     'layouts.navbars.sidebar',
        //     function ($view) {
        //         $view->with('roles', Auth::user());
        //     }
        // );
    }
}
