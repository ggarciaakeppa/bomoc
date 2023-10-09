<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TragasolidosUniversalSH extends Model
{
    protected $table = 'tragasolidos_universal_sh';
    
    protected $fillable = [

        'modelo',
        'tamaño_suc_y_desc',
        'paso_de_esfera',
        'ficha',
        'nota',
          
    ];
}
