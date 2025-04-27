<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;

class Register extends Component
{
    #[Validate([
        'firstname' => ['required' ,'min:4'],
        'secondname' => ['required' ,'min:3'],
        'email' => ['required' , 'email' , 'email:rfc,dns'],
        'phonenumber' => ['required' ,'min:10', 'numeric'],
        'password' => ['required' , 'confirmed' ,'min:6']
    ])]
  
    
    public $firstname;        
    public $secondname ;       
    public $email;
    public $phonenumber  ; 
    public $password;
    public $password_confirmation;

    public function register()
    {
        $this->validate();

        $validate_request=[
            'firstname'=> $this->firstname,
            'secondname'=> $this->secondname,
            'email'=> $this->email,
            'phonenumber' => $this->phonenumber,            
            'password' => $this->password,
        ];

    

        $checkuser=User::where('email', $validate_request['email'])->get();
        if ($checkuser->isNotEmpty())
        {          
            throw ValidationException::withMessages(
                ['email' => 'User exists , please login ']
            );
        }
        else
        {
        $user=User::create($validate_request);
        Auth::login($user);  

        return redirect('/');
        }
    }
  
    public function render()
    {
        return view('livewire.register');
    }
}
