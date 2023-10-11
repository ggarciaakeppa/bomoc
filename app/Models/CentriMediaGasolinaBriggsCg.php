<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriMediaGasolinaBriggsCg extends Model
{
    protected $table = 'media_presion_gasolina_briggs_cg';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
