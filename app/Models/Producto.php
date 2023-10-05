<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'tipo',
        'marca',
        'serie',
        'modelo',
        'hp',
        'fases',
        'volts',
        'tamaño_suc_y_desc',
        'rpm',
        'paso_de_esfera',
        'descarga',
        'pasos',
        'diametro_de_pozo',
        'nota',
        'base_de_acero',
        'ruedas_neumaticas',
        'ruedas_de_fierro',
        'material',
        'estatus',
        'ficha',  
    ];
}
