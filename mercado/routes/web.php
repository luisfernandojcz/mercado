<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;




Route::get('/', function () {
    return view('inicio');
});
Route::resource('categoria', CategoriaController::class); 
Route::resource('producto', ProductoController::class); 
Route::resource('usuario', UsuarioController::class); 
