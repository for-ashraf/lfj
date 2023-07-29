<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/necklaces', function () {
    return view('necklaces');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/app-blog-post', function () {
    return view('app-blog-post');
});

Route::get('/app-blog-post-form', [BlogsController::class, 'index'])->name('app-blog-post-form');


Route::get('/delete', function () {
    return view('delete');
});


Route::post('/submitBlogForm', 'App\Http\Controllers\BlogsController@submitBlogForm')->name('submitBlogForm');

