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

/* New Exercises Beyond Here */

Route::get('/test-route/{titleId}/desc/{desc}', function(string $titleId, string $desc) {
    return "Title ID: $titleId, Description: $desc";
});

Route::get('/test-route/{titleId}', function(string $titleId) {
    return $titleId;
})->where('titleId', '[0-9]+');

Route::get('/search/{search}', function(string $search) {
    return $search;
})->where('search', '.*');

Route::get('/test/route', function() {
    return route('test-route');
})->name('test-route');

//Middleware
Route::middleware(['user-middleware'])->group(function() {
    Route::get('route-middleware-group/first', function(Request $request) {
        echo "first";
    });

    Route::get('route-middleware-group/second', function(Request $request) {
        echo "second";
    });
});

//Controller
Route::controller(UserController::class)->group(function (){
    Route::get('/users', 'index');
    Route::get('/users/first', 'first');
    Route::get('/users/{id}', 'show');
});

//CSRF
Route::get('/token', function(Request $request) {
    $token = $request->session()->token();
    return view('token', ['token' => $token]);
});

Route::post('/token', function(Request $request) {
    return $request->all();
});