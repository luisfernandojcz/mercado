<?php

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
Route::get('apat', function (){
    return view('apat');
});

Route::get('amat', function (){
    return view('amat');
});

Route::get('nombre', function (){
    return view('nombre');
});

//actualizacion de las rutas en web.php (1 version)

Route::get('/', function () {
    return view('welcome');
});
