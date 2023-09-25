<?php

namespace App\Http\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;

class Productos extends Component

{


    public function render()
    {
        return view('livewire.producto.productos');
    }

    public function delete($id)
    {
        $producto = Producto::findOrFail($id);

        if ($producto->estatus == 0) {

            $producto->estatus = 1;
        
        } else

            $producto->estatus = 0;

        $producto->save();

        return redirect()->route('productos.index');
    }
}
