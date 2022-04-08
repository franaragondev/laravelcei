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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados', 'App\Http\Controllers\EmpleadoControlador@index');

Route::get('/hola', function(){
    return view('hola.index');
});

Route::get('delete/{id}','App\Http\Controllers\EliminarController@destroy');

Route::get('/editar/{id}','App\Http\Controllers\EditarEmpleado@empleado');
Route::post('/edit/{id}','App\Http\Controllers\EditarEmpleado@editar');