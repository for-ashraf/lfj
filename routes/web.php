<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
});

Route::get('/app-blog', 'App\Http\Controllers\BlogsController@appblog')->name('app-blog');
Route::resource('/users', UserController::class);
Route::resource('categories', CategoriesController::class);

Route::get('/app-blog-post', 'App\Http\Controllers\BlogsController@index')->name('app-blog-post');
Route::get('/app-category-post', 'App\Http\Controllers\CategoriesController@index')->name('app-category-post');
Route::delete('/blogs/{id}', 'App\Http\Controllers\BlogsController@destroy')->name('blogs.destroy');


Route::post('/app-blog-post', 'App\Http\Controllers\BlogsController@store')->name('app-blog-post');
Route::get('/edit-blog/{id}', 'App\Http\Controllers\BlogsController@edit')->name('edit-blog');
Route::patch('/app-blog-update/{id}', 'App\Http\Controllers\BlogsController@update')->name('app-blog-update');
?>
