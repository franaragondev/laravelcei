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
    return view('empleados.index');
});

Route::get('/empleados', 'App\Http\Controllers\EmpleadoController@show')->name('mostrarEmpleados');

Route::get('/add', function () {
    return view('addEmpleado.index');
});

Route::post('/addEmpleado', 'App\Http\Controllers\InsertarController@insert');

Route::get('delete', 'App\Http\Controllers\BorrarController@delete')->name('borrarEmpleado');

Route::get('/editar/{id}', 'App\Http\Controllers\EditarControlador@empleado');
Route::post('/edit/{id}', 'App\Http\Controllers\EditarControlador@editar');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
