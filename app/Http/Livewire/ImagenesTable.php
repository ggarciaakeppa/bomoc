<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Imagen;
use Illuminate\Support\Facades\DB;

class ImagenesTable extends DataTableComponent
{
    protected $model = Imagen::class;

    protected $listeners = ['eliminarImagen' => 'eliminarImagen'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDisabled();
        $this->setPaginationStatus(false);
        $this->setColumnSelectDisabled();
        $this->setEmptyMessage('Nada capturado');
    }

public function eliminarImagen($id)
{
    try {
        // Obtener la imagen por su ID
        $imagen = Imagen::find($id);

        if (!$imagen) {
            throw new \Exception('No se encontró la imagen con ID: ' . $id);
        }

        // Verificar si el archivo físico existe y eliminarlo
        if (file_exists($imagen->ruta)) {
            unlink($imagen->ruta); // Eliminar el archivo físico
        } else {
            throw new \Exception('El archivo físico no existe en la ruta: ' . $imagen->ruta);
        }

        // Eliminar el registro de la base de datos
        $query = "DELETE FROM imagens WHERE id = :id";
        $affected = DB::delete($query, ['id' => $id]);

        if ($affected > 0) {
            session()->flash('success', 'Imagen eliminada correctamente.');
        } else {
            throw new \Exception('No se pudo eliminar la imagen.');
        }

        // Emitir evento Livewire para actualizar la tabla (si es necesario)
        $this->emit('refreshDataTable');
    } catch (\Exception $e) {
        dd($e->getMessage()); // Capturar y mostrar cualquier error
    }
}

    


    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Título", "titulo")
                ->sortable(),
            Column::make("Descripción", "descripcion")
                ->sortable(),
                Column::make("Image","ruta")
                ->format(function($value){
                    return '<img src="'. asset($value) .'"  width="200" class="rounded">';
                })
                ->html(),
            Column::make("Fecha registro", "updated_at")
                ->sortable(),
                Column::make('Acciones', 'id')->format(function ($value, $row, Column $column) {
                    $boton = '<a wire:click="$emit(\'listenerDelete\',' . $value .')" class="btn btn-danger"><i class="fe fe-trash"></i></a>';
                
                    return $boton;
                })->html(),    
        ];
    }
}
