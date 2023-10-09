<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentriAltaKohler extends Model
{

    protected $table = 'alta_presion_kohler';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
