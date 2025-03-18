<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('guest')->group(function () {
    Route::get('test-route')->name('welcome.guest');
});
