<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriAltaLombardini extends Model
{
    protected $table = 'alta_presion_lombardini';

    protected $fillable =[
        
        'modelo',
        'hp',
        'rpm',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',

    ];

}
