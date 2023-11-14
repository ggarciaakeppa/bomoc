<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class ExchangeRate extends Component
{
   
    public function mount()
    {
      
    }

    public function render()
    {
        return view('livewire.exchange-rate');
    }

}
