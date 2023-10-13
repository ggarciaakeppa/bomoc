<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Inox304Cd;

class Inox304CdTable extends DataTableComponent
{
    protected $model = Inox304Cd::class;

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

            Column::make("Fases", "fases"),

            Column::make("Voltaje", "volts"),

            Column::make("RPM", "rpm"),
            
            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc"),
              
            Column::make("Ficha", "ficha"),
        ];
    }
}
