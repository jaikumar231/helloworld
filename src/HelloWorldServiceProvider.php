<?php

namespace Jaideep\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \Route::get('helloworld', function () {
            return \Jaideep\HelloWorld\HelloWorld::sayHello();
        });
    }

    public function register()
    {
        // Register services
    }
}
