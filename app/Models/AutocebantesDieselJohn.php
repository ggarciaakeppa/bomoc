<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutocebantesDieselJohn extends Model
{

    protected $table = 'motor_diesel_john';

    protected $fillable = [
        'modelo',
        'tamaño_suc_y_desc',
        'rpm',
        'base_de_acero',
        'ruedas_neumaticas',
        'ficha',
        'nota',
          
    ];

}
