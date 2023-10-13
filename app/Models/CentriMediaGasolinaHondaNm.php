<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriMediaGasolinaHondaNm extends Model
{
    protected $table = 'media_presion_gasolina_honda_nm';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
