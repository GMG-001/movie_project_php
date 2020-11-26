<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\MovieController::class, 'index'])->name('movie.all');
Route::get('movies/{id}', [\App\Http\Controllers\MovieController::class, 'ShowMovie'])->name('movie.clicked');
Route::get('/add', [\App\Http\Controllers\MovieController::class, 'add_movie'])->name('post.add_movie');
Route::post('/addmovie', [\App\Http\Controllers\MovieController::class, 'add'])->name('post.add');
