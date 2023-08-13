<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;


Route::get('/', function () {
    return view('index');
});

Route::get('/app-blog', 'App\Http\Controllers\BlogsController@appblog')->name('app-blog');


Route::get('/app-blog-post', 'App\Http\Controllers\BlogsController@index')->name('app-blog-post');


Route::post('/app-blog-post', 'App\Http\Controllers\BlogsController@store')->name('app-blog-post');
Route::get('/edit-blog/{id}', 'App\Http\Controllers\BlogsController@edit')->name('edit-blog');
Route::patch('/app-blog-update/{id}', 'App\Http\Controllers\BlogsController@update')->name('app-blog-update');
?>