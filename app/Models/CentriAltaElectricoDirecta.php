<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriAltaElectricoDirecta extends Model
{
    protected $table = 'alta_presion_directamente';

    protected $fillable =[
        
        'modelo',
        'hp',
        'fases',
        'rpm',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];

}