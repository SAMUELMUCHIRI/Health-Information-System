<?php

namespace App\Livewire;

use App\Models\ClientProgram;
use Livewire\Component;

class EnrolledPrograms extends Component
{
    public $id;
    public $programs;
    public function up()
    {
        $this->programs = ClientProgram::where('client_id', $this->id)
                                    ->with('program')  // Eager load the 'program' relationship
                                    ->get()
                                    ->pluck('program.name'); 
    }

    public function mount($id=null)
    {
        $this->id=$id;
        $this->programs = ClientProgram::where('client_id', $this->id)
                                    ->with('program')  // Eager load the 'program' relationship
                                    ->get()
                                    ->pluck('program.name'); 
    }
    
    public function render()
    {
        return view('livewire.enrolled-programs', ['programs' => $this->programs]);
    }
}
