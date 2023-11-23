<?php

namespace Naranjatec\Login;

use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadTranslationsFrom(__DIR__ . '/lang', 'login');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'login');
    }
    public function register()
    {
    }
}
