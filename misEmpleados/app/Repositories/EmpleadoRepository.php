<?php

namespace App\Repositories;
//use Your Model
use App\Models\Empleado;

/**
 * Class EmpleadoRepository.
 */
class EmpleadoRepository
{
    public function all(){
        return Empleado::all();
    }

    public function getById($id){
        return Empleado::find($id);
    }
}