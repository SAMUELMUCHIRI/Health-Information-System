<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Name extends Component
{
    
    public $firstname;
    public $secondname;
    public $spacer="  ";
    public $name;
    
    public function getName()
    {
        return $this->firstname . $this->spacer . $this->secondname;
    }
    public function mount()
    {
        $this->firstname = Auth::user()->firstname;
        $this->secondname= Auth::user()->secondname;
        $this->name=$this->getName();
    }
    public function boot() 
    {
        $this->firstname = Auth::user()->firstname;
        $this->secondname= Auth::user()->secondname;
        $this->name=$this->getName();
    }

    public function updating($greeting)
    {
        $this->firstname = Auth::user()->firstname;
        $this->secondname= Auth::user()->secondname;
        $this->name=$this->getName();
    }
    public function render()
    {
        return view('livewire.name');
    }
}
