<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class ExchangeRate extends Component
{
    public $fecha;
    public $dato;

    public function mount()
    {
        // Credenciales para la API
        $endpoint = 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43717/datos/oportuno';
    
        // Ojo el token tiene vigencia o si se usa mas de 50 veces en un lapso de 5 min se bloquea
        $token = '8b340de89c0ec3971ae83dff7fa9f08821b997adf64cd7891ae721195e4a7bbe';

        // Mandamos los headers
        $response = Http::get($endpoint, [
            'token' => $token,
        ]);

        // Validamos la petición 
        if ($response->ok()) {
            $data = $response->json();

            // Obtén el valor del campo "dato" & "fecha"
            $this->fecha = Carbon::parse($this->fecha)->format('d M Y');
            $this->dato = $data['bmx']['series'][0]['datos'][0]['dato'];
        } else {
            // Manejar el error si la solicitud falla.
            $this->dato = 0;
        }
    }

    public function render()
    {
        return view('livewire.exchange-rate');
    }

}
