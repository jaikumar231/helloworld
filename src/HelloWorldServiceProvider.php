<?php

namespace Jaideep\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
  public function boot()
{
    $this->loadViewsFrom(__DIR__.'/resources/views', 'helloworld');

    $this->publishes([
        __DIR__.'/config/helloworld.php' => config_path('helloworld.php'),
    ]);

    Route::get('/helloworld', function () {
        return HelloWorld::sayHello();
    });
}

    public function register()
    {
        // Register services
    }
}
