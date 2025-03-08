<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\TaskService;

class ProductController extends Controller
{
    public function __construct(
        protected TaskService $taskService,
    ){}

    public function index(ProductService $productService){
        $newProduct = [
            'id' => 4,
            'name' => 'Orange',
            'category' => 'Fruit'
        ];

        $productService->insert($newProduct);
        $this->taskService->add('Add to Card');
        $this->taskService->add('Checkout');

        $data = [
            'products' => $productService->listProducts(),
            'tasks' => $this->taskService->getAllTasks(),
            // 'sharedVariable' => 'Shared Variable'
        ];

        return view('products.index', $data);
    }
}
