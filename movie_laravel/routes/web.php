<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'getLogin'])->name('Login');
Route::get('/registration', [LoginController::class, 'registration'])->name('registration');
Route::post('/registration/save', [LoginController::class, 'registration_save'])->name('registration.save');
Route::get('/user_login', [LoginController::class, 'user_login'])->name('user_login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', [MovieController::class, 'index'])->name('movie.all');
Route::get('movies/{id}', [MovieController::class, 'ShowMovie'])->name('movie.clicked');
Route::get('/classes/{id}', [MovieController::class, 'genre'])->name('genre');
Route::get('/actors', [ActorController::class, 'show_actor'])->name('show_actor');



Route::middleware('auth')->group(function (){
    Route::get('/add_movie', [MovieController::class, 'add_movie'])->name('add_movie');
    Route::post('/add', [MovieController::class, 'add'])->name('add');
    Route::get('/user_page', [LoginController::class, 'user_page'])->name('user_page');
    Route::get('/add_actor1',[ActorController::class, 'add_actor1'])->name('add_actor1');
    Route::post('/add_actor',[ActorController::class, 'add_actor'])->name('add_actor');
    Route::get('/movies/{movie}/like', [MovieController::class, 'like'])->name('like');
    Route::delete('movies/{id}/delete', [MovieController::class, 'delete'])->name('delete');
    Route::get('/liked',[MovieController::class, 'liked'])->name('liked');
    Route::get('/{movie}/update',[MovieController::class, 'update'])->name('update');
    Route::put('/{movie}/update_save',[MovieController::class, 'update_save'])->name('update_save');


});
