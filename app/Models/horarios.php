<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    

    public $timestamps = false;

    protected $campos = [
        'inicio_manana',
        'fin_manana',
        'inicio_tarde',
        'fin_tarde',
        "FK_medico"       
    ];
}
