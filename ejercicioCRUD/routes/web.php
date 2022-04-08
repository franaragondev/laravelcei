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

Route::get('/', 'App\Http\Controllers\EmpleadoControlador@showAll');

Route::get('/empleados', 'App\Http\Controllers\EmpleadoControlador@showEmployee')->name('mostrarEmpleados');

Route::get('/add', function(){
    return view('add.index');
});

Route::post('/addEmployee', 'App\Http\Controllers\InsertarControlador@insert');

Route::get('delete', 'App\Http\Controllers\BorrarEmpleado@delete')->name('borrarEmpleado');