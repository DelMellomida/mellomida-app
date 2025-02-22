<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (Request $request) {
    $input = $request->input("value");
    // return view('test', ['value' => $input]);
    return $input;
});

Route::get('/test-provider', function (UserService $userService) {
    // return view('test', ['value' => $userService->listUsers()]);
    return $userService->listUsers();
    // dd($userService->listUsers());
});

Route::get('/test-controller', [UserController::class, 'index']);

Route::get('/test-facade', function (UserService $userService) {
    return Response::json($userService->listUsers());
    // dd(Response::json($userService->listUsers()));
});
