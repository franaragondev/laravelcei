<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InsertarController extends Controller
{
    public function insert(Request $request){
        $nombre = $request->input('nombre');
        $apellidos = $request->input('apellidos');
        $edad = $request->input('edad');
        $data = array('nombre' => $nombre, 'apellidos' => $apellidos, 'edad' => $edad);
        DB::table('empleados')->insert($data);
        return redirect('/empleados');
    }
}