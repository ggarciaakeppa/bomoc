<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CentriAltaTekpro;

class CentriAltaTekproTable extends DataTableComponent
{
    protected $model = CentriAltaTekpro::class;

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
        
            Column::make("Hp", "hp"),
        
            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc"),
        
        
        
        ];
    }
}
