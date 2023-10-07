<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AutocebantesElectricoFlex;

class AutocebantesElectricoFlexTable extends DataTableComponent
{
    protected $model = AutocebantesElectricoFlex::class;

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
            Column::make("Modelo", "modelo")
            ->sortable(),
        Column::make("Tamaño suc y desc", "tamaño_suc_y_desc")
            ->sortable(),
        Column::make("Hp", "hp")
            ->sortable(),
        Column::make("Fases", "fases")
            ->sortable(),
        Column::make("Rpm", "rpm")
            ->sortable(),
        Column::make("Ficha", "ficha")
            ->sortable(),
        ];
    }
}
