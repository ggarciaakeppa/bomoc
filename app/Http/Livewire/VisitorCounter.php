<?php

namespace App\Http\Livewire;

use App\Models\Visit;
use Livewire\Component;


class VisitorCounter extends Component
{
    public $monthlyVisits;
    public $daylyVisits;
    public $mes;
    public $año;
    public $dia;

    public function mount()
    {
        $this->monthlyVisits = $this->getMonthlyVisits();
        $this->daylyVisits = $this->getDaylyVisits();
        $this->mes= now()->format('M');
        $this->dia= now()->format('d');
        $this->año=now()->format('Y');
    }

    public function render()
    {
        return view('livewire.visitor-counter');
    }

    private function getMonthlyVisits()
    {
        $currentMonth = now()->format('m');
       

        return Visit::whereMonth('created_at', $currentMonth)
            ->count();
    }

    private function getDaylyVisits()  {
        $currentDay = now()->format('d');
       
        return Visit::whereDay('created_at', $currentDay)
        ->count();
    }
}
