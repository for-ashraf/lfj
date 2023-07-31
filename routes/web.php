<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;


Route::get('/', function () {
    return view('index');
});

Route::get('/app-blog', function () {
    return view('app-blog');
})->name('app-blog');


Route::get('/app-blog-post', 'App\Http\Controllers\BlogsController@index')->name('app-blog-post');

Route::post('/app-blog-post', 'App\Http\Controllers\BlogsController@store')->name('app-blog-post');
