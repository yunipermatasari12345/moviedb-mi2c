<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MovieController::class, 'homepage']);

Route::get('/detail-movie/{id}/{slug}', [MovieController::class, 'detail_movie']);

Route::get('/create-movie', [MovieController::class, 'create'])->middleware('auth');

Route::post('/movie/store', [MovieController::class, 'store'])->middleware('auth');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);
