<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EditarEmpleado extends Controller
{
    public function empleado($id) {
        $empleado = DB::select('select * from empleados where id = ?',[$id]);
        return view('editar.index',['empleado'=>$empleado]);
    }

    public function editar(Request $request,$id) {
        $nombre = $request->input('nombre');
        $apellidos = $request->input('apellidos');
        $edad = $request->input('edad');
        /*$data=array('nombre'=>$nombre,"apellidos"=>$apellidos,"edad"=>$edad);*/
        /*DB::table('empleados')->update($data);*/
        /* DB::table('empleados')->whereIn('id', $id)->update($request->all());*/
        DB::update('update empleados set nombre = ?,apellidos=?,edad=? where id = ?',[$nombre,$apellidos,$edad,$id]);
        return redirect('/empleados'); 
    }
}