<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutocebantesDieselLombardini extends Model
{
    protected $table = 'motor_diesel_lombardini';

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

