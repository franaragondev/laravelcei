<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EmpleadoRepository;

class EmpleadoControlador extends Controller
{
    public function __construct(EmpleadoRepository $empleadoRepository){
        $this -> empleadoRepository = $empleadoRepository;
    }
    
    public function showAll(){
        $empleados = $this -> empleadoRepository -> all();
        return view('home.index', [
            'empleados' => $empleados
        ]);
    }

    public function showEmployee(){
        $empleados = $this -> empleadoRepository -> all();
        return $empleados;
    }
}