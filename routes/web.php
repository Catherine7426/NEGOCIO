<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('/', HomeController::class )->name('home');

Route::get('productos',[ProductoController::class ,'index'])->name('productos.index');

Route::get('productos/create',[ProductoController::class ,'create'])->name('productos.create');

Route::post('productos/store',[ProductoController::class ,'store'])->name('productos.store');

Route::get('productos/{producto}/show',[ProductoController::class ,'show'])->name('productos.show');


Route::get('productos{producto}/edit',[ProductoController::class,'edit'])->name('productos.edit');

Route::put('cursos{producto}',[ProductoController::class,'update'])->name('productos.update');
