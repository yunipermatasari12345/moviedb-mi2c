<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/', [MovieController::class, 'homepage']);
