<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentriMediaGasolinaHondaCg extends Model
{
    protected $table = 'media_presion_gasolina_honda_cg';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
