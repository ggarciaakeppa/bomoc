<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentriMediaGasolinaBarmesaNm extends Model
{
    protected $table = 'media_presion_gasolina_barmesa_nm';

    protected $fillable =[
        
        'modelo',
        'hp',
        'fases',
        'ficha',
        'nota',
    ];
}
