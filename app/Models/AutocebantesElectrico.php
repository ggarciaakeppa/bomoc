<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutocebantesElectrico extends Model
{
    protected $table = 'motor_electrico';

    
    protected $fillable = [
        'modelo',
        'tamaño_suc_y_desc',
        'hp',
        'fases',
        'rpm',
        'ficha',
        'nota',
          
    ];
}
