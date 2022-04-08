<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EmpleadoRepository;

class EmpleadoControlador extends Controller
{
    public function __construct(EmpleadoRepository $empleadoRepository){
        $this -> empleadoRepository = $empleadoRepository;
    }

    public function index(){
        // Creamos una variable para guardar los datos que devuelve el repositorio
        $empleados = $this -> empleadoRepository -> all();

        // Mandamos a la vista los datos de la variable
        return view('empleados.index', [
            'empleados' => $empleados
        ]);
    }
}