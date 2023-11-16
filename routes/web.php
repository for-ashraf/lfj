<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CelebritiesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AmazonProductsController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\HomeController; // Import HomeController

Auth::routes();

// Routes for password reset and home (you can keep them outside the group)
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

// Apply 'auth' middleware to protect routes other than the root ("/") route
Route::middleware(['auth'])->group(function () {
    // Define routes that require authentication here.
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/categories', CategoriesController::class);
    Route::resource('admin/blogs', BlogsController::class);
    Route::resource('admin/celebrities', CelebritiesController::class);
    Route::resource('admin/products', AmazonProductsController::class);
    Route::resource('admin/image_gallery', ImageGalleryController::class);
    Route::resource('admin/events', EventsController::class);
    Route::resource('admin/tags', TagController::class);

    // Route to the dashboard, protected by 'auth' middleware
    Route::get('backend/dashboard', [HomeController::class, 'dashboard'])->name('backend.dashboard'); // Use the controller method

});

// Root route without authentication
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/load-blogs', [HomeController::class, 'loadBlogsRange']); // Add the route for loading blogs
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/searchBlog', [HomeController::class, 'searchBlog'])->name('home.searchBlog'); // Match the method name 'searchBlog'
Route::get('/blog/{id}', [HomeController::class, 'showBlog'])->name('home.showblog');
Route::get('/blogs/{category}', [HomeController::class, 'showCategory'])->name('home.category');
Route::get('/categories', [HomeController::class, 'categories'])->name('home.categories');
Route::get('/celebrities', [HomeController::class, 'celebrities'])->name('celebrities');
Route::get('/jewellerystudio', [HomeController::class, 'jstudio'])->name('jewellerystudio');
Route::get('/jewellerystudio/{id}', [HomeController::class, 'jstudio'])->name('jewellerystudio.id');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/events/{id}', [HomeController::class, 'showEvent'])->name('eventShow');
Route::get('/celebrities/{id}', [HomeController::class, 'showCelebrity'])->name('celebrityShow');
Route::post('/load-image', [AmazonProductsController::class, 'loadImage'])->name('loadImage');
Route::get('/category/{key}', [HomeController::class, 'category'])->name('category');

Route::get('/load-more-data', [HomeController::class, 'loadMoreData'])->name('load.more');




