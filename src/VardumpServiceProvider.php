<?php

namespace Helloarman\Vardump;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class VardumpServiceProvider extends ServiceProvider{
    public function boot(){
        //
    }

    public function register(){
        require_once __DIR__.'/app/Helpers/vardump.php';
    }
}