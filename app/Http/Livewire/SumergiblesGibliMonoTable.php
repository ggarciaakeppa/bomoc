<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SumergiblesGibliMono;

class SumergiblesGibliMonoTable extends DataTableComponent
{
    protected $model = SumergiblesGibliMono::class;

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
                
            Column::make("HP", "hp"),
              
            Column::make("Fases", "fases"),

            Column::make("Voltaje", "volts"),

            Column::make("Ø", "diametro_de_pozo"),

        ];
    }
}
