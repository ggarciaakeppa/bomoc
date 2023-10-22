<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Bvl;

class BvlTable extends DataTableComponent
{
    protected $model = Bvl::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [

            Column::make("Modelo", "modelo"),
            
            Column::make("Hp", "hp"),

            Column::make("Armazón", "material"),

            Column::make("Polos", "fases"),

            Column::make("Q.máx (GPM)", "rpm"),

            Column::make("P.máx (ft)", "paso_de_esfera"),
        ];
    }
}
