<?php

namespace App\Http\Livewire\Ingreso;

use Livewire\Component;
use App\Models\IngresoAutoModel;

class IngresoAuto extends Component
{
    public $placas;
    public $nombreConductor;
    public $motivo;
    public $direccionVisita;
    public $marcaModelo;
    public $colorAuto;
    public $conoCredencial;
    public $permiso = false;
    public $keyDinamico;
    public $notasAuto;
    public $notasDomicilio;

    public $motivos = ['Visita', 'Entrega', 'Reparación'];
    public $direccionesVisita = [];

    protected $rules = [
        'placas' => 'required',
        'nombreConductor' => 'required',
    ];

    /* public function mount()
    {
        $this->placas = 'ABC123';
        $this->nombreConductor = 'Juan Pérez';
        $this->marcaModelo = 'Toyota Corolla';
        $this->colorAuto = 'rgba(255, 0, 0, 1)';
        $this->conoCredencial = '12345';
        $this->keyDinamico = 'abcdef123456';
        $this->notasAuto = 'Sin observaciones';
        $this->notasDomicilio = 'Ninguna nota';
        
        $this->motivos = ['Visita', 'Entrega', 'Reparación'];
        $this->direccionesVisita = ['Calle A #123', 'Avenida B #456', 'Plaza C #789'];
    } */

    public function render()
    {
        /* $ingresos = IngresoAuto::all();
        return view('livewire.ingreso-auto-crud.index', compact('ingresos')); */
        $ingresos = IngresoAutoModel::all();
        return view('livewire.ingreso.ingreso-auto', compact('ingresos'));
    }

    public function create()
    {
        /* return view('livewire.ingreso.ingreso-auto-create'); */
        return view('livewire.ingreso.ingreso-auto-create', [
            'motivos' => $this->motivos,
            'direccionesVisita' => $this->direccionesVisita,
        ]);
    }

    public function ingresoAutoStore()
    {
        dd("ho");
        $this->validate();

        IngresoAutoModel::create([
            'placas' => $this->placas,
            'conductor' => $this->conductor,
            // Agrega más campos aquí...
        ]);

        session()->flash('message', 'Ingreso creado exitosamente.');

        return redirect()->route('ingreso-autos.index');
    }

    public function edit($id)
    {
        /* $this->ingreso = IngresoAuto::findOrFail($id);
        return view('livewire.ingreso-auto-crud.edit', ['ingreso' => $this->ingreso]); */
        return view('livewire.ingreso.ingreso-auto-edit', ['id' => $id]);
    }

    public function update()
    {
        $this->validate();

        $this->ingreso->save();

        session()->flash('message', 'Ingreso actualizado exitosamente.');

        return redirect()->route('ingreso-autos.index');
    }

    public function deleteIngreso($id)
    {
        $ingreso = IngresoAutoModel::findOrFail($id);
        $ingreso->delete();

        session()->flash('message', 'Ingreso eliminado exitosamente.');

        return redirect()->route('ingreso-autos.index');
    }
}
