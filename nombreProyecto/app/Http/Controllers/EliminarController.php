<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EliminarController extends Controller
{
    public function destroy($id){
        DB::delete('delete from empleados where id = ?',[$id]);
        return back();
    }
}