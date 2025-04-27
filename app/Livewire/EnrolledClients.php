<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EnrolledClients extends Component
{
    public $clients;

    public function mount()
    {
        $this->clients = Auth::user()->client->count();
        
    }
    public function boot() 
    {
        $this->clients = Auth::user()->client->count();
    }

    public function up($clients)
    {
        $this->clients = Auth::user()->client->count();
    }
    public function render()
    {
        return view('livewire.enrolled-clients');
    }
}
