<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentriMediaGasolinaBriggsNm extends Model
{
    protected $table = 'media_presion_gasolina_briggs_nm';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
