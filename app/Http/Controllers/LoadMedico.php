<?php

namespace App\Http\Controllers;
use DB;
use App\Models\medico;


use Illuminate\Http\Request;

class LoadMedico extends Controller
{
    public function load(){   
      //  $query = DB::table('medico')   
      //  ->get();
      $query=DB::select('call consultarEspecialidades');
        return view('vista3',['arrayEspecialidades'=>$query]);
    }

    public function selectMedicos($especialidad){
    
       
        return medico::join("persona","medico.id_persona","=","persona.dni_persona")
              ->where('medico.especialidad_medico','=',$especialidad)
    ->get();
    }
    
}
