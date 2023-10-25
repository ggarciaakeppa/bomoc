<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\TragasolidosGasolinaBarmesa;

class TragasolidosGasolinaBarmesaTable extends DataTableComponent
{
    protected $model = TragasolidosGasolinaBarmesa::class;

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
              
           
           
        ];
    }
}
