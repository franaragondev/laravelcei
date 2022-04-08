<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puestos extends Model
{
    use HasFactory;
    // LE DECIMOS QUE USE LA TABLA PUESTOS
    protected $table = 'puesto';
}