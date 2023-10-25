<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CentriMediaDiesel;

class CentriMediaDieselTable extends DataTableComponent
{
    protected $model = CentriMediaDiesel::class;

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
           
            Column::make("Rpm", "rpm"),
            
            Column::make("Aspiración", "fases"),
                
            Column::make("Cilindros", "volts"),
            
            
        ];
    }
}
