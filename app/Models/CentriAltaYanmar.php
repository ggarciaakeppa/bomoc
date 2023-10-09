<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CentriAltaYanmar extends Model
{
    protected $table = 'alta_presion_yanmar';

    protected $fillable =[
        
        'modelo',
        'hp',
        'rpm',
        'tamaño_suc_y_desc',
        'ficha',
        'nota',];

}
