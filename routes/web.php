<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\MuroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('dashboard');
})->name('Dashboard');

//Route::get('/productos', function () {
   // return view('productos.index');
//})->name('ProductosIndex');
Route::get('/productos', [ProductosController::class, 'index'])->name('ProductosIndex');
Route::get('/productos/create', [ProductosController::class, 'create'])->name('ProductosCreate');
Route::post('/productos', [ProductosController::class, 'store'])->name('productosStore');
Route::get('/productos/{producto}/edit', [ProductosController::class, 'edit'])->name('ProductosEdit');
Route::patch('/productos/{producto}', [ProductosController::class, 'update'])->name('ProductosUpdate');
Route::delete('/productos/{producto}', [ProductosController::class, 'destroy'])->name('ProductosDestroy');
//registro
Route::get('/registro', [RegistroController::class, 'index'])->name('RegistroIndex');
Route::post('/registro', [RegistroController::class, 'store'])->name('RegistroStore');
Route::get('/muro', [MuroController::class, 'index'])->name('MuroIndex');
//login
Route::get('/login', [LoginController::class, 'index'])->name('LoginIndex');
Route::post('/login', [LoginController::class, 'store'])->name('LoginStore');
//logout
Route::post('/logout', [LogoutController::class, 'store'])->name('LogoutStore');
