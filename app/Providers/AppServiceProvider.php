<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::directive('invertColor', function ($expression) {
            return "<?php if( {$expression} > 30 && {$expression} < 60) {
                echo \"is-warning\";
            } elseif ({$expression} >= 60) {
                echo \"is-danger\";
            }; 
            ?>";
        });

        Blade::directive('color', function ($expression) {
            return "<?php if( {$expression} > 30 && {$expression} < 60) {
                echo \"is-warning\";
            } elseif ({$expression} >= 60) {
                echo \"is-success\";
            } elseif ({$expression} <= 30){
                echo \"is-danger\";            
            }; 
            ?>";
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
