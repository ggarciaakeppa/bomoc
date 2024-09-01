<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class SenderEmail extends Component
{
    public $nombre;
    public $correo;
    public $teléfono = "No";
    public $mensaje;
    public $g_recaptcha_response;
    public $success_message;

    protected $rules = [
        'nombre' => 'required|min:6',
        'correo' => 'required|email',
        'mensaje' => 'required',
        'g_recaptcha_response' => 'required', 
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $this->validate();
        
         // Verificar reCAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LcvyPkpAAAAAFOFx-1X48ScBs69ZPRVKRadpJ5T',
            'response' => $this->g_recaptcha_response,
        ]);
        
        $responseBody = json_decode($response->getBody());

        if (!$responseBody->success || $responseBody->score < 0.5) {
            session()->flash('error_message', 'Falló la verificación de reCAPTCHA. Intenta nuevamente.');
            return;
        }

        $contact['nombre'] = $this->nombre;
        $contact['correo'] = $this->correo;
        $contact['teléfono']= $this->teléfono;
        $contact['mensaje'] = $this->mensaje;

       Mail::to('contacto@bomoc.com.mx')->send(new ContactFormMailable($contact));


        $this->resetForm();

        session()->flash('success_message', 'Hemos recibido tu mensaje correctamente y nos pondremos en contacto contigo en breve.');

        sleep(1);

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
