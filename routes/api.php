<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PaisesController;
use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\EscuelasController;
use App\Http\Controllers\Api\UsersController;


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



Route::get('pais', [PaisesController::class, 'index']);
Route::post('pais', [PaisesController::class, 'store']);
Route::delete('pais', [PaisesController::class, 'destroy']);


Route::get('departamentos', [DepartamentoController::class, 'index']);
Route::post('departamentos', [DepartamentoController::class, 'store']);
Route::delete('departamentos', [DepartamentosController::class, 'destroy']);

Route::get('escuelas', [EscuelasController::class, 'index']);
Route::post('escuelas', [EscuelasController::class, 'store']);
Route::delete('escuelas', [EscuelasController::class, 'destroy']);

Route::get('usuarios', [UsersController::class, 'index']);
Route::post('usuarios', [UsersController::class, 'store']);
Route::delete('usuarios', [UsersController::class, 'destroy']);
