<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TragasolidosGasolinaBarmesa extends Model
{
    protected $table = 'tragasolidos_gasolina_barmesa';
    
    protected $fillable = [

        'modelo',
        'hp',
        'ficha',
        'nota',
          
    ];
}
