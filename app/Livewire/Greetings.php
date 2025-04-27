<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Greetings extends Component
{
    public  $name;
    public $greeting;

    public function mount()
    {
        $this->name = Auth::user()->firstname;
        $this->greeting = $this->getGreeting();
    }
    public function boot() 
    {
        $this->name = Auth::user()->firstname;
        $this->greeting = $this->getGreeting();
    }

    public function updating($greeting)
    {
        $this->greeting = $this->getGreeting();
    }
    public function getGreeting()
{
    $hour = Carbon::now()->hour;

    if ($hour >= 5 && $hour < 12) {
        return 'Good morning';
    } elseif ($hour >= 12 && $hour < 17) {
        return 'Good afternoon';
    } elseif ($hour >= 17 && $hour < 21) {
        return 'Good evening';
    } else {
        return 'Good night';
    }
}

    public function render()
    {
        return view('livewire.greetings');
    }
}
