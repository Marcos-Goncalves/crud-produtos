<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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

Route::get('/produtos', [ProdutosController::class, 'index']);

Route::get('/produtos/{id}', [ProdutosController::class, '']);

Route::post('/produtos', [ProdutosController::class, 'create']);

Route::delete('/produtos/{id}', [ProdutosController::class, '']);

Route::put('produtos/{id}', [ProdutosController::class, '']);