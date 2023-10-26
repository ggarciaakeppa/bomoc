<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CaseraNb;

class CaseraNbTable extends DataTableComponent
{
    protected $model = CaseraNb::class;

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

            Column::make("Tamaño", "tamaño_suc_y_desc"),
          
            Column::make("Fases", "fases"),
         
        ];
    }
}
