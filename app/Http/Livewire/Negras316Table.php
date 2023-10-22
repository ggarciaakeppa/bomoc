<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Negras316;

class Negras316Table extends DataTableComponent
{
    protected $model = Negras316::class;

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
              
            Column::make("Voltaje", "volts"),

            Column::make("Fases", "fases"),

            Column::make("RPM", "rpm"),

            Column::make("Descarga", "descarga"),
                
        ];
    }
}
