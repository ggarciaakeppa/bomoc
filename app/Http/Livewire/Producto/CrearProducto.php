<?php

namespace App\Http\Livewire\Producto;

use App\Models\Producto;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearProducto extends Component
{
    use WithFileUploads;

    //Variables del modelo
    public $tipo;
    public $marca;
    public $serie;
    public  $modelo;
    public  $codigo;
    public    $hp;
    public $fases;
    public $volts;
    public  $tamano;
    public $rpm;
    public $paso;
    public $descarga;
    public  $pasos;
    public  $btus;
    public $diametro;
    public $pda;
    public $nota;
    public $base;
    public  $ruedasN;
    public $ruedasF;
    public $material;
    public $ficha;
    public $photo;

    public $photoPath; // Variable para almacenar la ruta del archivo

    //    Definir reglas segun sea el caso

    /* protected $messages = [
         'modelo' => 'El modelo no puede ir vacio.',
         'marca' => 'La marca no pueden ir vacia.',
     ];

    protected function rules()
     {
         return [
             'modelo' => 'required',
             'marca' => 'required|max:255',
         ];
     }
    */
    public function createProducto()
    {

        //     $this->validate();

        $producto = Producto::create([
            'tipo' => $this->tipo,
            'modelo' => $this->modelo,
            'marca' => $this->marca,
            'serie' => $this->serie,
            'codigo' => $this->codigo,
            'hp' => $this->hp,
            'fases' => $this->fases,
            'volts' => $this->volts,
            'tamano' => $this->tamano,
            'rpm' => $this->rpm,
            'paso' => $this->paso,
            'descarga' => $this->descarga,
            'pasos' => $this->pasos,
            'btus' => $this->btus,
            'diametro' => $this->diametro,
            'pda' => $this->pda,
            'nota' => $this->nota,
            'base' => $this->base,
            'ruedasN' => $this->ruedasN,
            'ruedasF' => $this->ruedasF,
            'material' => $this->material,
            'estatus' => 1,
            'pathPhoto' => null,
            'ficha' => $this->ficha,
        ]);

        $path = $this->photo->storeAs('photos', $producto->id . '.jpeg', 'public');

        // Almacenar la ruta en la variable
        $this->photoPath = $path;

        $producto->pathPhoto = asset('storage/' . $this->photoPath);

        $producto->save();

        

        return redirect()->to('/productos');
    }

    public function render()
    {
        return view('livewire.producto.crear-producto');
    }
}
