<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriMediaGasolinaTekproNm extends Model
{
    protected $table = 'media_presion_gasolina_tek_nm';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
