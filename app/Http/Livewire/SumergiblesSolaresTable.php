<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SumergiblesSolares;

class SumergiblesSolaresTable extends DataTableComponent
{
    protected $model = SumergiblesSolares::class;

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
                
            Column::make("HP", "hp"),
              
            Column::make("Kw", "fases"),

            Column::make("Voltaje", "volts"),

            Column::make("RPM", "rpm"),

            Column::make("Descarga", "descarga"),

            Column::make("Flujo máx LPM", "tamaño_suc_y_desc"),
                
        ];
    }
}
