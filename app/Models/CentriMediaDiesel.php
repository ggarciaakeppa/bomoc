<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriMediaDiesel extends Model
{
    protected $table = 'media_presion_diesel';

    protected $fillable =[
        
        'modelo',
        'hp',
        'rpm',
        'fases',
        'volts',
        'ficha',
        'nota',
    ];
}
