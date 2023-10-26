<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\FichaController;
use App\Http\Controllers\AtributosController;
use App\Http\Controllers\PericiaController;
use App\Http\Controllers\ArmaduraController;
use App\Http\Controllers\ArmaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PoderController;
use App\Http\Controllers\MagiaController;

Route::get('/', [FichaController::class, 'index']);
Route::get('/ficha/{id}', [FichaController::class, 'show']);
Route::post('/ficha/criar', [FichaController::class, 'store']);
Route::delete('/ficha/{id}', [FichaController::class, 'destroy']);
Route::put('/ficha/{id}', [FichaController::class, 'update']);

Route::put('/ficha/atributo/{id}', [AtributosController::class, 'update']);

Route::put('/ficha/pericia/{id}/{pericia_id}', [PericiaController::class, 'update']);

Route::post('/ficha/armadura/{id}', [ArmaduraController::class, 'store']);
Route::put('/ficha/armadura/{id}/{armadura_id}', [ArmaduraController::class, 'update']);
Route::delete('/ficha/armadura/{id}/{armadura_id}', [ArmaduraController::class, 'destroy']);

Route::post('/ficha/arma/{id}', [ArmaController::class, 'store']);
Route::put('/ficha/arma/{id}/{arma_id}', [ArmaController::class, 'update']);
Route::delete('/ficha/arma/{id}/{arma_id}', [ArmaController::class, 'destroy']);

Route::post('/ficha/item/{id}', [ItemController::class, 'store']);
Route::put('/ficha/item/{id}/{item_id}', [ItemController::class, 'update']);
Route::delete('/ficha/item/{id}/{item_id}', [ItemController::class, 'destroy']);

Route::post('/ficha/poder/{id}', [PoderController::class, 'store']);
Route::put('/ficha/poder/{id}/{poder_id}', [PoderController::class, 'update']);
Route::delete('/ficha/poder/{id}/{poder_id}', [PoderController::class, 'destroy']);

Route::post('/ficha/magia/{id}', [MagiaController::class, 'store']);
Route::put('/ficha/magia/{id}/{magia_id}', [MagiaController::class, 'update']);
Route::delete('/ficha/magia/{id}/{magia_id}', [MagiaController::class, 'destroy']);

Route::get('/chat', [ChatController::class, 'index']);
