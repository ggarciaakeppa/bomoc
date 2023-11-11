<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class SenderEmail extends Component
{
    public $nombre;
    public $correo;
    public $teléfono;
    public $mensaje;
    public $success_message;

    protected $rules = [
        
        'nombre' => 'required|min:6',
        'correo' => 'required|email',
        'mensaje' => 'required',
        'teléfono' => 'required|min:15', 
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $this->validate();

        $contact['nombre'] = $this->nombre;
        $contact['correo'] = $this->correo;
        $contact['teléfono']= $this->teléfono;
        $contact['mensaje'] = $this->mensaje;

        Mail::to('contacto@bomoc.com.mx')->send(new ContactFormMailable($contact));

        $this->resetForm();

        sleep(1);

        $this->success_message = 'We received your message successfully and will get back to you shortly!';
    }

    private function resetForm()
    {
        $this->nombre = '';
        $this->correo = '';
        $this->teléfono = '';
        $this->mensaje = '';
    }
    public function render()
    {
        return view('livewire.sender-email');
    }
}
