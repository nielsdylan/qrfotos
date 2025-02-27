<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Modules\Administrador\CustomerController;
use App\Http\Controllers\Modules\AuthController;
use App\Http\Controllers\Modules\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('login', [AuthController::class, 'login'])->name('login');
// Route::post('session', [AuthController::class, 'session'])->name('session');


Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('session', [AuthController::class, 'session'])->name('session');
});

Route::middleware(['auth'])->group(function () {
    // Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('home', [HomeController::class, 'home'])->name('home');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::name('galeria.')->prefix('galeria')->group(function () {
        Route::get('nuevo', [GalleryController::class, 'nuevo'])->name('nuevo');
        Route::post('guardar-fotos', [GalleryController::class, 'guardarFotos'])->name('guardar-fotos');
        Route::put('eliminar-fotos', [GalleryController::class, 'eliminarFotos'])->name('eliminar-fotos');
        Route::get('lista', [GalleryController::class, 'lista'])->name('lista');
    });

    Route::name('administrador.')->prefix('administrador')->group(function () {
        Route::name('clientes.')->prefix('clientes')->group(function () {
            Route::get('lista', [CustomerController::class, 'lista'])->name('lista');
            Route::post('listar', [CustomerController::class, 'listar'])->name('listar');
            Route::post('guardar', [CustomerController::class, 'guardar'])->name('guardar');
            Route::get('editar/{id}', [CustomerController::class, 'editar'])->name('editar');
            Route::put('eliminar/{id}', [CustomerController::class, 'eliminar'])->name('eliminar');
            // Route::get('nuevo', [GalleryController::class, 'nuevo'])->name('nuevo');
        });
    });
});
