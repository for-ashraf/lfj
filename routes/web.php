<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;


Route::get('/', function () {
    return view('index');
});

Route::get('/app-blog-post', function () {
    return view('app-blog-post');
});

Route::get('/app-blog', function () {
    return view('app-blog');
});

Route::get('/app-blog', function () {
    return view('app-blog');
})->name('app-blog');

Route::post('/submitBlogForm', 'App\Http\Controllers\BlogsController@submitBlogForm')->name('submitBlogForm');
