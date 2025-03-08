<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;

class UserServiceProvider extends ServiceProvider
{
    protected $app;

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
                [
                    'id' => 1,
                    'name' => 'Apple',
                    'category' => 'Fruits',
                ],
                [
                    'id' => 2,
                    'name' => 'Broccoli',
                    'category' => 'Vegetable'
                ],
                [
                    'id' => 3,
                    'name' => 'Sardines',
                    'category' => 'Canned Goods'
                ]
            ];

            return new ProductService($products);
        });
    }


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->share('productKey', 'abc123');
    }

    public function show(ProductService $productService, string $id){
        $product = collect($productService->listProducts())->filter(function ($item) use ($id) {
            return $item['id'] == $id;
        })->first();

        return $product;
    }
}
