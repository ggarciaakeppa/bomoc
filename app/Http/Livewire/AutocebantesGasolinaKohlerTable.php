<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AutocebantesGasolinaKohler;

class AutocebantesGasolinaKohlerTable extends DataTableComponent
{
    protected $model = AutocebantesGasolinaKohler::class;

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
        Column::make("Base de acero", "base_de_acero")
            ->sortable(),
        Column::make("Ruedas de fierro", "ruedas_de_fierro")
            ->sortable(),
        Column::make("Ficha", "ficha")
            ->sortable(),  
        ];
    }
}
