<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductosController;
use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Rutas de autenticación
Route::group(['prefix' => 'auth'], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
});

// Rutas protegidas para Categorias
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/categorias', [ApiCategoriaController::class, 'index']);
    Route::post('/categorias', [ApiCategoriaController::class, 'store']);
    Route::get('/categorias/{id}', [ApiCategoriaController::class, 'show']);
    Route::put('/categorias/{id}', [ApiCategoriaController::class, 'update']);
    Route::delete('/categorias/{id}', [ApiCategoriaController::class, 'destroy']);
});

// Rutas para Productos (sin protección para este ejercicio)
Route::get('/productos', [ApiProductosController::class, 'index']);
Route::post('/productos', [ApiProductosController::class, 'store']);
Route::get('/productos/{id}', [ApiProductosController::class, 'show']);
Route::put('/productos/{id}', [ApiProductosController::class, 'update']);
Route::delete('/productos/{id}', [ApiProductosController::class, 'destroy']);