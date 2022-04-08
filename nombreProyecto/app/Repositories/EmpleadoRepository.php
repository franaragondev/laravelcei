<?php

namespace App\Repositories;

use App\Models\Empleado;

/**
 * Class EmpleadoRepository.
 */
class EmpleadoRepository 
{
    public function all(){
        // Devolvemos todo el modelo, es decir, devolvemos all() (todo) de la tabla Empleado
        return Empleado::all();
    } 
}