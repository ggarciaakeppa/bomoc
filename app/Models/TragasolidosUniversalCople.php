<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TragasolidosUniversalCople extends Model
{
    protected $table = 'tragasolidos_universal_cople';
    
    protected $fillable = [

        'modelo',
        'hp',
        'rpm',
        'tamaño_suc_y_desc',
        'paso_de_esfera',
        'ficha',
        'nota',
          
    ];
}
