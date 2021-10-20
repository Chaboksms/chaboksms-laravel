<?php
namespace Chaboksms\Laravel;
use Chaboksms\ChaboksmsApi as Api;
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/config.php' => config_path('chaboksms.php')],'chaboksms');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'chaboksms');    
        $this->app->singleton('chaboksms', function ($app) {
            $username = $app['config']->get('chaboksms.username');
            $password = $app['config']->get('chaboksms.password');
            return new Api($username, $password);
        });
    }
}