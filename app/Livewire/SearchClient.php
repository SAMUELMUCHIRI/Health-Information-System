<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;



class SearchClient extends Component
{
    public $registered;
    public $results;
    public $query;

   

  

    public function search()
    {
        $this->results = Client::where('firstname', 'like',  $this->query . '%')->where('user_id',Auth::id())->get();
        if ($this->results->isEmpty())
        {
            $this->results = null;
            session()->flash("results","No Matching Records");
        }
       
    }
        
 
    public function render()
    {
        return view('livewire.search-client');
    }
}
