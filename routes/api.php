<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RutasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaProductoController;

Route::post('login',[AuthController::class,'login']);

Route::group(['prefix'=>'catalogos'],function(){
   Route::get('/categoria-productos',[CategoriaProductoController::class,'index']);
});

Route::group(['prefix'=>'productos'],function(){
    Route::get('/',[ProductoController::class,'index']);
});

Route::group(['prefix' => 'rutas'],function(){
    Route::get('/navbar-general',[RutasController::class,'index']);
});
Route::middleware('auth:sanctum')->group(function(){
   Route::get('user-info',[AuthController::class,'userInfo']);
   Route::post('logout',[AuthController::class,'logout']);
});
