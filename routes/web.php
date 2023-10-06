<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CelebritiesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AmazonProductsController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\HomeController; // Import HomeController

Auth::routes();

// Routes for password reset and home (you can keep them outside the group)
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

// Apply 'auth' middleware to protect routes other than the root ("/") route
Route::middleware(['auth'])->group(function () {
    // Define routes that require authentication here.
    Route::resource('/users', UserController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('blogs', BlogsController::class);
    Route::resource('celebrities', CelebritiesController::class);
    Route::resource('products', AmazonProductsController::class);
    Route::resource('image_gallery', ImageGalleryController::class);
    Route::resource('events', EventsController::class);

    // Route to the dashboard, protected by 'auth' middleware
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard'); // Use the controller method

});

// Root route without authentication
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
