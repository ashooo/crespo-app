<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-users', [UserController::class, 'show']);

Route::get('/test-users', [UserController::class, 'index']);

Route::get('/test-container', function (Request $request) {
    $input = $request->input('key');
    return $input;
});

Route::get('/test-provider', function (UserService $userService) {
    return $userService->listUsers();
});

Route::get('/test-facade', function (UserService $userService) {
    return $userService->listUsers();
});


// Exercise 3

Route::get('/post/{post}/comment/{comment}', function (string $postId, string $comment) {
    return "Post ID: " . $postId . " - Comment: " . $comment;
});

Route::get('/post/{id}', function (string $id) {
    return $id;
})->where('id', '[0-9]+');

Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');


// route alias
Route::get('/test/route/sample', function () {
    return route('test-route');
})->name('test-route');


// middleware groups
Route::middleware(['user-middleware'])->group(function () {
    Route::get('route-middleware-group/first', function (Request $request) {
        echo 'first';
    });

    Route::get('route-middleware-group/second', function (Request $request) {
        echo 'second';
    });
});

// controller group
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/first', 'first');
    Route::get('/users/{id}', 'get');
});


// csrf
Route::get('/token', function (Request $request) {
    return view('token');
});

Route::post('/token', function(Request $request) {
    return $request->all();
});








Route::get('/secret', function () {
    echo "kasalanan bang mahulog sayo?";
});
