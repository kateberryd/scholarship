<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SubjectsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     
    public function boot()
    {
        //
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
     
    public function register()
    {
        $this->app->bind('App\Repositories\Subjects\SubjectsContract',
            'App\Repositories\Subjects\EloquentSubjectsRepository');
    }
}
