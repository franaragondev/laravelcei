<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    // LE DECIMOS EL NOMBRE DE LA TABLA A USAR
    protected $table = 'empleados';
}