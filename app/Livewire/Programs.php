<?php

namespace App\Livewire;

use App\Models\Program;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Programs extends Component
{
    #[Validate([
        'name' => ['min:2','required'],
        'program_number' =>  ['required' ,'min_digits:4'],
        'description' => ['min:10','required' ,'string' ]
    ])]
    public $name;
    public $program_number;
    public $description;
    public function register_program()
    {
        $this->validate();
        $validate_request=[
            'name'=> $this->name,
            'program_number' =>$this->program_number,
            'description'=> $this->description,          
            'user_id'=> Auth::id(),           
        ];
        
        
        $checkprogram=Program::where('program_number', $validate_request['program_number'])->get();
        if ($checkprogram->isNotEmpty())
        {          
            session()->flash('program_status', 'Program exists  !');
        }
        else
        {
        $program=Program::create($validate_request);
        
        $this->reset();

        session()->flash('program_status', 'Program Created 👍');
        }
    }
    public function render()
    {
        return view('livewire.programs');
    }
}
