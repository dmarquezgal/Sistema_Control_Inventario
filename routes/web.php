<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('auth/login');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::resource('admin/register', 'App\Http\Controllers\RegisterController')->middleware('auth.admin');
Route::resource('admin/productos', 'App\Http\Controllers\ProductosController')->middleware('auth.admin');
Route::resource('admin/pedidos', 'App\Http\Controllers\PedidosController')->middleware('auth.admin');
Route::resource('admin/clientes', 'App\Http\Controllers\ClientesController')->middleware('auth.admin');
Route::resource('admin/empleados', 'App\Http\Controllers\EmpleadosController')->middleware('auth.admin');
Route::resource('admin/proveedores', 'App\Http\Controllers\ProveedoresController')->middleware('auth.admin');

Route::resource('vendedor/pedidos_v', 'App\Http\Controllers\PedidosControllerV')->middleware('auth.vendedor');
Route::resource('vendedor/productos_v', 'App\Http\Controllers\ProductosControllerV')->middleware('auth.vendedor');