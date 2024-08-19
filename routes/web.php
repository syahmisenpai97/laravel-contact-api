<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return view('demo-app');
});

Route::resource('users', UserController::class);

