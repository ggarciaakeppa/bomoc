<?php

namespace App\Http\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;

class EditarProducto extends Component
{
    public $tipo, $marca, $serie, $modelo, $codigo,
    $hp, $fases, $volts, $tamano, $rpm, $paso,
    $descarga, $pasos, $btus, $diametro, $pda,
    $nota, $base, $ruedasN, $ruedasF, $material;

public $producto;

public function mount($id)
{
    $this->producto = Producto::findOrFail($id);
    $this->tipo = $this->producto->tipo;
    $this->modelo = $this->producto->modelo;
    $this->marca = $this->producto->marca; 
    $this->serie = $this->producto->serie;
    $this->codigo = $this->producto->codigo;
    $this->hp = $this->producto->hp;
    $this->fases = $this->producto->fases;
    $this->volts = $this->producto->volts;
    $this->tamano = $this->producto->tamano;
    $this->rpm = $this->producto->rpm;
    $this->paso = $this->producto->paso;
    $this->descarga = $this->producto->descarga;
    $this->pasos = $this->producto->pasos;
    $this->btus = $this->producto->btus;
    $this->diametro = $this->producto->diametro;
    $this->pda = $this->producto->pda;
    $this->nota = $this->producto->nota;
    $this->base = $this->producto->base;
    $this->ruedasN = $this->producto->ruedasN;
    $this->ruedasF = $this->producto->ruedasF;
    $this->material = $this->producto->material;
}

    


    public function render()
    {
        
        return view('livewire.producto.editar-producto');
    }


    public function editProducto()
    {

        $this->producto->update([
            'tipo' => $this->tipo,
            'marca' => $this->marca,
            'serie' => $this->serie,
            'modelo' => $this->modelo,
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
        ]);    
    }
}
