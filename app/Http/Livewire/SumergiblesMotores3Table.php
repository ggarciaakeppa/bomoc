<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SumergiblesMotores3;

class SumergiblesMotores3Table extends DataTableComponent
{
    protected $model = SumergiblesMotores3::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDisabled();
        $this->setColumnSelectDisabled();
    }

    public function columns(): array
    {
        return [
            Column::make("Modelo", "modelo"),
                
            Column::make("HP", "hp"),
              
            Column::make("Fases", "fases"),

            Column::make("Voltaje", "volts"),

            Column::make("Peso", "material"),

        ];
    }
}
