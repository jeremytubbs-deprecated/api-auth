<?php

namespace Jeremytubbs\ApiAuth;

use Illuminate\Support\ServiceProvider;

class ApiAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Add api_token on creating user
        \App\User::creating(function ($user) {
            $user->api_token = str_random(60);
        });

        // Load routes
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/Http/routes.php';
        }

        $this->publishes([
            __DIR__.'/../config/api-auth.php' => config_path('api-auth.php'),
        ], 'config');

        // Publish the migration
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
