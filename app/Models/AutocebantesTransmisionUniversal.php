<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutocebantesTransmisionUniversal extends Model
{
    protected $table = 'transmision_universal';

    protected $fillable = [
        'modelo',
        'tamaño_suc_y_desc',
        'hp',
        'rpm',
        'ficha',
        'nota',
          
    ];
}
