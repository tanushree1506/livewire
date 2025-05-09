<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class, 'index']);
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users/store',[UserController::class, 'store'])->name('users.store');
Route::get('/user-detail',[UserDetailController::class, 'index']);