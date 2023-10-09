<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentriAltaJohn extends Model
{
    protected $table = 'alta_presion_john';

    protected $fillable = [

        'modelo',
        'hp',
        'rpm',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',
    ];
}
