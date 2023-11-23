<?php
// MyVendor\contactform\src\ContactFormServiceProvider.php
namespace Naranjatec\Login;

use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
    public function register()
    {
    }
}
