<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EmpleadoRepository;
use DB;

class EmpleadoController extends Controller
{
    public function __construct(EmpleadoRepository $empleadoRepository){
        $this -> empleadoRepository = $empleadoRepository;
    }

    public function show(){
        $empleados = $this -> empleadoRepository -> all();
        return $empleados;
    }
}