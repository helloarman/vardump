<?php

namespace Helloarman\Vardump;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class VardumpServiceProvider extends ServiceProvider{
    public function boot(){
        Blade::directive('ar', function ($expression) {
            return "<?php ar($expression); ?>";
        });
    }

    public function register(){
        require_once __DIR__.'/app/helpers/vardump.php';
    }
}
