<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LatestClients extends Component
{
    public $latest_clients;
    
    
    public function mount()
    {
        $this->latest_clients=DB::table('clients')->where('user_id',Auth::id())->select('id','firstname','secondname','date_of_birth','gender','contact_info' , 'created_at')->latest()->limit(3)->get();
        
    }
    public function boot() 
    {
        $this->latest_clients=DB::table('clients')->where('user_id',Auth::id())->select('id','firstname','secondname','date_of_birth','gender','contact_info' ,'created_at')->latest()->limit(3)->get();    }

 


    public function render()
    {
        
        return view('livewire.latest-clients');
    }
}
