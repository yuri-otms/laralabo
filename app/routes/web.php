<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Livewire\CreatePost;

Route::get('/counter', Counter::class);
Route::get('/create-post', CreatePost::class);

Route::get('/', function () {
    return view('index');
});
Route::get('/preline', function () {
    return view('preline');
});
Route::get('/preline-test', function () {
    return view('preline-test');
});
Route::get('/test', function () {
    return view('index');
});
// Route::get('/', function () {
//     return view('welcome');
// });
