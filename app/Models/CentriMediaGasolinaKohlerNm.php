<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentriMediaGasolinaKohlerNm extends Model
{
    protected $table = 'media_presion_gasolina_kohler_nm';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
