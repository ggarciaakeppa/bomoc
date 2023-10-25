<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\TragasolidosUniversalET6;

class TragasolidosUniversalEt6Table extends DataTableComponent
{
    protected $model = TragasolidosUniversalET6::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDisabled();
        $this->setPaginationDisabled();
        $this->setColumnSelectDisabled();
    }

    public function columns(): array
    {
        return [
        
            Column::make("Modelo", "modelo"),
        
            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc"),
          
            Column::make("Paso de esfera", "paso_de_esfera"),
          
          
        ];
    }
}
