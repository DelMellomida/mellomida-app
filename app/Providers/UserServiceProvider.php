<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    protected $app;

    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app) {
            $users = [
                [
                    'id' => 1,
                    'name' => 'John Doe',
                    'email' => 'john@example.com',
                    'gender' => 'male',
                ],
                [
                    'id' => 2,
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
