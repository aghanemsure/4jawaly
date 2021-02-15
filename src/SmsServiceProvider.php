<?php

namespace Aghanem\Jawaly;

use Aghanem\Jawaly\Jawaly;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/jawaly.php' => config_path('jawaly.php'),
                ], 'config');
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations')
                ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('jawaly', function($app) {
            return new Jawaly();
        });
        $this->app->bind('jawaly', function ()
        {
            return new Jawaly();
        });
        $this->app->alias('jawaly', Jawaly::class);

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('jawaly', Jawaly::class);
    }

}
