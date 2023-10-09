<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentriAltaTekpro extends Model
{
    protected $table = 'alta_presion_tekpro';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
