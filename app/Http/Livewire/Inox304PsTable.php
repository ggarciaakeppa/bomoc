<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Inox304Ps;

class Inox304PsTable extends DataTableComponent
{
    protected $model = Inox304Ps::class;

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
          
        ];
    }
}
