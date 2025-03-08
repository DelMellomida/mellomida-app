<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
        // $source = isset($trace[0]['file']) ? $trace[0]['file'] . ' (Line: ' . $trace[0]['line'] . ')' : 'Unknown Source';

        // View::share('sharedVariable', "Shared from: $source");
        
        // View::share('sharedVariable', 'I am from AppServiceProvider');
        view()->share('sharedVariable', 'I am from AppServiceProvider');
    }
}
