<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EditarControlador extends Controller
{
    public function empleado($id){
        $empleado = DB::select('select * from empleados where id = ?', [$id]);
        return view('editEmpleado.index', ['empleado' => $empleado]);
    }

    public function editar(Request $request, $id){
        $nombre = $request->input('nombre');
        $apellidos = $request->input('apellidos');
        $edad = $request->input('edad');
        DB::update('update empleados set nombre=?, apellidos=?, edad=? where id = ?', [$nombre, $apellidos, $edad, $id]);
        return redirect('/empleados');
    }
}