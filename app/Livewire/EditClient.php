<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class EditClient extends Component
{
    #[Validate([
        'firstname'=> ['required' ,'min:2','string'],
        'secondname'=> ['required' ,'min:2','string'],
        'date'=> ['required','date'],
        'gender' =>  ['required', 'string', 'in:Male,Female,Other'],            
        'nationalid' =>  ['required' ,'min_digits:8'],
        'phonenumber' =>  ['required' ,'min_digits:10'],
    ])]
    
    
    public $id;
       
    public $firstname;  
    public $secondname;
    
    public $date;
    public $gender;
    public $phonenumber; 
    
    public $nationalid; 
    public $query;
    
    public function mount($id=null)
    {
        $this->id = $id;
        $this->query=Client::where( 'id',$id)->first();

        $this->firstname=$this->query->firstname;
        $this->secondname=$this->query->secondname;
        $this->date=$this->query->date_of_birth;
         $this->gender=$this->query->gender;            
        $this->nationalid=$this->query->national_id;
        
         $this->phonenumber=$this->query->contact_info;
    }
       
        public function register_client ()
    {
        
        $validate_request=[
            'firstname'=> $this->firstname,
            'secondname'=> $this->secondname,
            'date_of_birth'=> $this->date,
            'gender' => $this->gender,            
            'national_id' => $this->nationalid,
            'user_id'=> Auth::id(),
            'contact_info' => $this->phonenumber,
        ];
        $this->validate();
    
       
        
        $user=Client::where('id', $this->id)->update($validate_request);
        
        $this->reset();
    
        session()->flash('client_status', 'Client profile Edited 👍');
    }
    
    
    public function render()
    {
        return view('livewire.edit-client');
    }
}
