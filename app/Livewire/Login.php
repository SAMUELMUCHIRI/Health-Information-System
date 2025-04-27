<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    #[Validate ([
        'email'=>['required' ,'email'],
        'password'=>['required']
    ])]
    public $email;
    public $password;

    public function submit()
    {
        $this->validate();
        
         $content=[
            'email'=> $this->email,
            'password' => $this->password,
        ];
       
        if (! Auth::attempt($content))
        {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
       
        }else
        {
        request()->session()->regenerate();
        return redirect('/');
         }
        
        }
    
    public function render()
    {
        return view('livewire.login');
    }
}
