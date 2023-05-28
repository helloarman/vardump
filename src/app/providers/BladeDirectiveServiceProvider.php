<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeDirectiveServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('ar', function ($expression) {
            return "<?php ar($expression); ?>";
        });
    }

    public function register()
    {
        //
    }
}
