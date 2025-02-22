<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    protected $app;

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app) {
            $users = [
                [
                    'name' => 'John Doe',
                    'email' => 'john@example.com',
                    'gender' => 'male',
                ],
                [
                    'name' => 'Jane Doe',
                    'email' => 'jane@example.com',
                    'gender' => 'female',
                ]
            ];

            return new UserService($users);
        });
    }


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
