<?php

namespace App\Http\Livewire\Ingreso;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\IngresoAutoModel;

class IngresoAutoTable extends DataTableComponent
{
    protected $model = IngresoAutoModel::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Placas", "placas")
                ->sortable(),
            Column::make("Conductor", "conductor")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
