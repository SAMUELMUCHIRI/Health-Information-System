<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class RegisterClient extends Component
{
   #[Validate([
    'firstname'=> ['required' ,'min:2','string'],
    'secondname'=> ['required' ,'min:2','string'],
    'date'=> ['required','date'],
    'gender' =>  ['required', 'string', 'in:Male,Female,Other'],            
    'nationalid' =>  ['required' ,'min_digits:8'],
    'phonenumber' =>  ['required' ,'min_digits:10'],
   ])]

   
public $firstname;  
public $secondname;

public $date;
public $gender;
public $phonenumber; 

public $nationalid; 

   
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

    $checkclient=Client::where('national_id', $validate_request['national_id'])->get();
    if ($checkclient->isNotEmpty())
    {          
        session()->flash('client_status', 'Client exists  !');
    }
    else
    {
    $user=Client::create($validate_request);
    
    $this->reset();

    session()->flash('client_status', 'Client profile Created 👍');
    }

} 
        
    public function render()
    {
        return view('livewire.register-client');
    }
}
