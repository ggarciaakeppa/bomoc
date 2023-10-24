<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CentriAltaLombardini;

class CentriAltaLombardiniTable extends DataTableComponent
{
    protected $model = CentriAltaLombardini::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDisabled();
        $this->setColumnSelectDisabled();
        $this->setPaginationDisabled();
    }

    public function columns(): array
    {
        return [

            Column::make("Modelo", "modelo"),

            Column::make("Hp", "hp"),

            Column::make("Rpm", "rpm"),

            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc"),

         

        ];
    }
}
