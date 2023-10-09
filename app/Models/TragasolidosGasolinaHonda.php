<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TragasolidosGasolinaHonda extends Model
{
    protected $table = 'tragasolidos_diesel_honda';
    
    protected $fillable = [
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'paso_de_esfera',
        'base_de_acero',
        'ruedas_de_fierro',
        'ficha',
        'nota',
          
    ];
}
