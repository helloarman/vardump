<?php

namespace Helloarman\Vardump;
use Illuminate\Support\ServiceProvider;
use Helloarman\Vardump\app\Providers\BladeDirectiveServiceProvider;

class VardumpServiceProvider extends ServiceProvider{
    public function boot(){
        //
    }

    public function register(){
        require_once __DIR__.'/app/Helpers/vardump.php';

        $this->app->register(BladeDirectiveServiceProvider::class);
    }
}
