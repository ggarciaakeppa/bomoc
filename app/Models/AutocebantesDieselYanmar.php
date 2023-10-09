<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AutocebantesDieselYanmar extends Model
{
    protected $table = 'motor_diesel_yanmar';

    protected $fillable = [
        'modelo',
        'tamaño_suc_y_desc',
        'rpm',
        'hp',
        'base_de_acero',
        'ruedas_neumaticas',
        'ficha',
        'nota',
          
    ];
}

