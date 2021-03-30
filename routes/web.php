<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
// use App\Http\Controllers\ClienteControllerResource;
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

Route::get('/',[ClienteController::class,'index']);
Route::get('/criar',[ClienteController::class,'create']);
Route::post('/criar-cliente',[ClienteController::class,'store']);

Route::get('/cliente/edita/{id}',[ClienteController::class,'show']);
// Route::get('/cliente/edita/{id}',[ClienteController::class,'edita']);

Route::post('/cliente/atualiza/{id}',[ClienteController::class,'update']);

Route::get('/deletar/{id}',[ClienteController::class,'destroy']);
