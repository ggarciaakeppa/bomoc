<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Imagen;
use Illuminate\Support\Facades\Storage;

class UploadImageForm extends Component
{
    use WithFileUploads;

    public $titulo;
    public $descripcion;
    public $imagen;

    public function save()
    {
        $this->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required|image|max:2048',
        ]);

        $nombreArchivo = time() . '_' . $this->imagen->getClientOriginalName();
        $this->imagen->storeAs('imagenes', $nombreArchivo, 'public');

        Imagen::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'ruta' => 'storage/imagenes/' . $nombreArchivo,
        ]);

        session()->flash('success', 'Imagen subida correctamente.');

        $this->resetForm();
    }   

    public function resetForm()
    {
        $this->titulo = '';
        $this->descripcion = '';
        $this->imagen = null;
    }

    public function render()
    {
        return view('livewire.upload-image-form');
    }
}
