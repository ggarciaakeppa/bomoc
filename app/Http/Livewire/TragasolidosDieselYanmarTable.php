<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\TragasolidosDieselYanmar;

class TragasolidosDieselYanmarTable extends DataTableComponent
{
    protected $model = TragasolidosDieselYanmar::class;

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
          
            Column::make("Hp", "hp"),
          
            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc"),
          
            Column::make("Paso de esfera", "paso_de_esfera"),
          
            Column::make("Base de acero", "base_de_acero"),

            Column::make("Ruedas neumaticas", "ruedas_neumaticas"),
          
          
        ];
    }
}
