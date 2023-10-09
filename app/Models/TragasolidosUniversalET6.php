<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TragasolidosUniversalET6 extends Model
{
    protected $table = 'tragasolidos_universal_et6';
    
    protected $fillable = [

        'modelo',
        'tamaño_suc_y_desc',
        'paso_de_esfera',
        'ficha',
        'nota',
          
    ];
}
