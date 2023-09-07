<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CelebritiesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AmazonProductsController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
});

Route::resource('/users', UserController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('blogs', BlogsController::class);
Route::resource('celebrities', CelebritiesController::class);
Route::resource('events', EventsController::class);
Route::resource('products', AmazonProductsController::class);


?>
