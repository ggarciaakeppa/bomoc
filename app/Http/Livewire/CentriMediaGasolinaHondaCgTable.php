<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CentriMediaGasolinaHondaCg;

class CentriMediaGasolinaHondaCgTable extends DataTableComponent
{
    protected $model = CentriMediaGasolinaHondaCg::class;

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
               
            Column::make("Hp", "hp"),
            
            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc"),
              
            Column::make("Ficha", "ficha"),
        ];
    }
}
