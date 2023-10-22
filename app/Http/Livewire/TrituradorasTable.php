<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Trituradoras;

class TrituradorasTable extends DataTableComponent
{
    protected $model = Trituradoras::class;

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

            Column::make("Voltaje", "volts"),

            Column::make("RPM", "rpm"),

            Column::make("Descarga", "descarga"),

            Column::make("Fases", "fases"),
        ];
    }
}
