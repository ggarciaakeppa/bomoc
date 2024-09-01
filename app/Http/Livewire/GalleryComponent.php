<?php

namespace App\Http\Livewire;

use App\Models\Imagen;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;


class GalleryComponent extends Component
{

    public $imagenes = [];

    public function mount()
    {
        // Obtener las imágenes desde la base de datos
        $imagenes = Imagen::all();

        // Preparar los datos de las imágenes para el frontend
        foreach ($imagenes as $imagen) {
            $this->imagenes[] = [
                'ruta' => asset($imagen->ruta),
                'titulo' => $imagen->titulo,
                'descripcion' => $imagen->descripcion,
            ];
        }
    }

    public function render()
    {
        return view('livewire.gallery-component');
    }
}
