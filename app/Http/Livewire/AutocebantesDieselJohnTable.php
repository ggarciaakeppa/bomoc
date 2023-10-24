<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AutocebantesDieselJohn;

class AutocebantesDieselJohnTable extends DataTableComponent
{
    protected $model = AutocebantesDieselJohn::class;

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

            Column::make("Tamaño suc y desc", "tamaño_suc_y_desc"),

            Column::make("HP", "hp"),

            Column::make("Rpm", "rpm"),

            Column::make("Base de acero", "base_de_acero"),

            Column::make("Ruedas neumaticas", "ruedas_neumaticas"),


        ];
    }
}
