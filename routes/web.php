<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('show_categorias');

Route::get('/', function () {
    return view('welcome');
});
