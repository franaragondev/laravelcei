<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EmpleadoRepository;
// use DB;

class BorrarEmpleado extends Controller
{

    public function __construct(EmpleadoRepository $empleadoRepository){
        $this -> empleadoRepository = $empleadoRepository;
    }

    public function delete(Request $request){
        // DB::delete('delete from empleados where id = ?', [$id]);
        $empleado = $this -> empleadoRepository -> getById($request->id);
        $empleado -> delete();

        $listaEmpleados = $this -> empleadoRepository -> all();
        return $listaEmpleados;
    }
}