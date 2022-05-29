<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;
    protected $table = 'medico';
    protected $primaryKey = 'matricula_medico';

    public $timestamps = false;

    protected $campos = [
        'matricula_medico',
        'administrador_medico',
        'antiguedad_medico',
        'especialidad_medico'        
    ];
}


