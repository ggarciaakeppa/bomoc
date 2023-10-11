<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriAltaElectricoUniversal extends Model
{
    protected $table = 'alta_presion_universal';

    protected $fillable =[
        
        'modelo',
        'hp',
        'rpm',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
