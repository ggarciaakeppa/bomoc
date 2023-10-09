<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentriAltaHonda extends Model
{
    protected $table = 'alta_presion_honda';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
