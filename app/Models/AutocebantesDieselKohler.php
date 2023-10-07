<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AutocebantesDieselKohler extends Model
{
    
    protected $table = 'motor_diesel_kohler';

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
