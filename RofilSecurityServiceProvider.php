<?php

namespace Rofil\Security;

use Illuminate\Support\ServiceProvider;

class RofilSecurityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'RofilSecurity');
        require __DIR__.'/routes.php';
    }

    public function register()
    {
        
    }
}
