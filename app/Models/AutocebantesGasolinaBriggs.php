<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AutocebantesGasolinaBriggs extends Model
{
    
    protected $table = 'motor_gasolina_briggs';

    protected $fillable = [
        'modelo',
        'tamaño_suc_y_desc',
        'hp',
        'base_de_acero',
        'ruedas_de_acero',
        'ficha',
        'nota',
          
    ];
}
