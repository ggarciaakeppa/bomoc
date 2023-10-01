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
        'codigo',
        'hp',
        'fases',
        'volts',
        'tamano',
        'rpm',
        'paso',
        'descarga',
        'pasos',
        'btus',
        'diametro',
        'pda',
        'nota',
        'base',
        'ruedasN',
        'ruedasF',
        'material',
        'estatus',
        'pathPhoto',
        'ficha',  
    ];
}
