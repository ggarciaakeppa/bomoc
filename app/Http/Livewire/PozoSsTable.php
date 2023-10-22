<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\PozoSs;

class PozoSsTable extends DataTableComponent
{
    protected $model = PozoSs::class;

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

            Column::make("Descarga", "descarga"),
        ];
    }
}
