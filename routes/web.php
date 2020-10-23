<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::view('/', 'index');
Route::view('/movie', 'show');
Route::resource('/movies', MoviesController::class);