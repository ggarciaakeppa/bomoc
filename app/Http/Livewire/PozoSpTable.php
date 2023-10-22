<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\PozoSp;

class PozoSpTable extends DataTableComponent
{
    protected $model = PozoSp::class;

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
              
            Column::make("Pasos", "pasos"),

            Column::make("GPM", "rpm"),

            Column::make("Ø", "diametro_de_pozo"),

            Column::make("Descarga", "descarga"),
        ];
    }
}
