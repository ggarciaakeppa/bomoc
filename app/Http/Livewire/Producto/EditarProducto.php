<?php

namespace App\Http\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;


class EditarProducto extends Component
{

    public $tipo;
    public $marca; 
    public $serie;
    public $modelo;
    public $hp;
    public $fases;
    public $volts;
    public $tamaño_suc_y_desc;
    public $rpm;
    public $paso_de_esfera;
    public $descarga;
    public $pasos;
    public $diametro_de_pozo;
    public $nota;
    public $base_de_acero;
    public $ruedas_neumaticas;
    public $ruedas_de_fierro;
    public $material;
    public $estatus;
    public $ficha;


public $producto;


public function mount($id)
{
    $this->producto = Producto::findOrFail($id);
    
    $this->tipo = $this->producto->tipo;
    $this->marca = $this->producto->marca;
    $this->serie = $this->producto->serie;
    $this->modelo = $this->producto->modelo;
    $this->hp = $this->producto->hp;
    $this->fases = $this->producto->fases;
    $this->volts = $this->producto->volts;
    $this->tamaño_suc_y_desc = $this->producto->tamaño_suc_y_desc;
    $this->rpm = $this->producto->rpm;
    $this->paso_de_esfera = $this->producto->paso_de_esfera;
    $this->descarga = $this->producto->descarga;
    $this->pasos = $this->producto->pasos;
    $this->diametro_de_pozo = $this->producto->diametro_de_pozo;
    $this->nota = $this->producto->nota;
    $this->base_de_acero = $this->producto->base_de_acero;
    $this->ruedas_neumaticas = $this->producto->ruedas_neumaticas;
    $this->ruedas_de_fierro = $this->producto->ruedas_de_fierro;
    $this->material = $this->producto->material;
    $this->estatus = $this->producto->estatus;
    $this->ficha = $this->producto->ficha;
}

    


    public function render()
    {
       
        return view('livewire.producto.editar-producto');
    }


    public function updateProducto()
{
    $this->producto->update([
        'tipo' => $this->tipo,
        'marca' => $this->marca,
        'serie' => $this->serie,
        'modelo' => $this->modelo,
        'hp' => $this->hp,
        'fases' => $this->fases,
        'volts' => $this->volts,
        'tamaño_suc_y_desc' => $this->tamaño_suc_y_desc,
        'rpm' => $this->rpm,
        'paso_de_esfera' => $this->paso_de_esfera,
        'descarga' => $this->descarga,
        'pasos' => $this->pasos,
        'diametro_de_pozo' => $this->diametro_de_pozo,
        'nota' => $this->nota,
        'base_de_acero' => $this->base_de_acero,
        'ruedas_neumaticas' => $this->ruedas_neumaticas,
        'ruedas_de_fierro' => $this->ruedas_de_fierro,
        'material' => $this->material,
        'ficha' => $this->ficha,
    ]);

    return redirect()->to('/productos');
}

}
