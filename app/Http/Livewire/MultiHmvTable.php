<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\MultiHmv;

class MultiHmvTable extends DataTableComponent
{
    protected $model = MultiHmv::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Modelo", "modelo"),
            
            Column::make("Hp", "hp"),

            Column::make("Etapas", "fases"),

            Column::make("GPM", "rpm"),

            Column::make("Tamaño", "tamaño_suc_y_desc"),

            
        ];
    }
}
