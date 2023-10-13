<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CentriMediaGasolinaBarmesaNm;

class CentriMediaGasolinaBarmesaNmTable extends DataTableComponent
{
    protected $model = CentriMediaGasolinaBarmesaNm::class;

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
          
            Column::make("Arranque", "fases"),
            
            Column::make("Ficha", "ficha"),
            
        ];
    }
}
