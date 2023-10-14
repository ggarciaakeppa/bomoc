<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Practik;

class PractikTable extends DataTableComponent
{
    protected $model = Practik::class;

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

            Column::make("Fases", "fases"),
           
            Column::make("Voltaje", "volts"),

            Column::make("RPM", "rpm"),

            Column::make("Descarga","tamaño_suc_y_desc"),

        ];
    }
}
