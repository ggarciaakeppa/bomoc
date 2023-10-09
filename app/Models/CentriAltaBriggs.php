<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriAltaBriggs extends Model
{
    protected $table = 'alta_presion_briggs';

    protected $fillable =[
        
        'modelo',
        'hp',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
