<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;

Route::get('/counter', Counter::class);

Route::get('/test', function () {
    return view('index');
});
Route::get('/', function () {
    return view('welcome');
});
