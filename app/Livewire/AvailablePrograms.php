<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\ClientProgram;
use App\Models\Program;
use Livewire\Component;

use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AvailablePrograms extends Component
{
    
    use WithPagination;
    public $id;

    public $assign_program;
    public function mount($id=null)
    {
        $this->id=$id;
        
    }

    public function assign($idd)
    {
        $this->assign_program=new ClientProgram;
        $this->assign_program->program_id=$idd;
        $this->assign_program->user_id=Auth::id();
        $this->assign_program->client_id=$this->id;
        $this->assign_program->save();


    }

    


    public function render()
    {
        
        return view('livewire.available-programs',[
            'programs'=>DB::table('programs')
            ->where('user_id',Auth::id())
            ->paginate(5),
        ]);
    }
}
