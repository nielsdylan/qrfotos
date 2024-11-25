<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Modules\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('home', [HomeController::class, 'home'])->name('home');
