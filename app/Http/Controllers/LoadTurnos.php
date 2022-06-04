<?php

namespace App\Http\Controllers;
use App\Models\horarios;
use DB;

use Illuminate\Http\Request;

class LoadTurnos extends Controller
{
    public function selectHorarios(){   
       
        $query=DB::select('call consultarHorarios(?)',[1]);
        $horarios=$query[0]  ;
        return view('turnos',['horarios'=>$horarios]);
       
    }   
}
