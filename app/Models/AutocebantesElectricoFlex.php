<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AutocebantesElectricoFlex extends Model
{
    protected $table = 'motor_electrico_flex';

    
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
