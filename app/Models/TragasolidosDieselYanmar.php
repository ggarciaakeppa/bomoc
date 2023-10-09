<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TragasolidosDieselYanmar extends Model
{
    protected $table = 'tragasolidos_diesel_yanmar';
    
    protected $fillable = [
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'paso_de_esfera',
        'base_de_acero',
        'ruedas_neumaticas',
        'ficha',
        'nota',
          
    ];
}
